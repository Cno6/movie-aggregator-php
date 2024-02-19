<?php

namespace App\Kernel\Auth;

interface AuthInterface
{
    public function attempt(string $email, string $password): bool;

    public function logout(): void;

    public function check(): bool;

    public function user(): ?array;

    public function email(): string;

    public function password(): string;

    public function table(): string;

    public function sessionField(): string;
}
