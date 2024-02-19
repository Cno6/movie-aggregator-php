<?php

namespace App\Kernel\Auth;

use App\Kernel\Config\ConfigInterface;
use App\Kernel\Database\DatabaseInterface;
use App\Kernel\Session\SessionInterface;

class Auth implements AuthInterface
{
    public function __construct(
        private DatabaseInterface $database,
        private SessionInterface $session,
        private ConfigInterface $config
    ) {
    }

    public function attempt(string $email, string $password): bool
    {
        $user = $this->database->first($this->table(), [
            $this->email() => $email,
        ]);

        if (! $user) {
            return false;
        }

        if (! password_verify($password, $user[$this->password()])) {
            return false;
        }

        $this->session->set($this->sessionField(), $user);

        return true;
    }

    public function logout(): void
    {
        $this->session->remove($this->sessionField());
    }

    public function user(): ?array
    {
        if (! $this->check()) {
            return null;
        }

        return $this->$this->database->first($this->table(), [
            'id' => $this->session->get($this->sessionField()),
        ]);
    }

    public function check(): bool
    {
        return $this->session->has($this->sessionField());
    }

    public function table(): string
    {
        return $this->config->get('auth.table', 'users');
    }

    public function email(): string
    {
        return $this->config->get('auth.email', 'email');
    }

    public function password(): string
    {
        return $this->config->get('auth.password', 'password');
    }

    public function sessionField(): string
    {
        return $this->config->get('auth.session_field', 'user_id');
    }
}
