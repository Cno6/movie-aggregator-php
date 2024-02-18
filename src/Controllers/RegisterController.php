<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;

class RegisterController extends Controller
{
    public function index()
    {
        $this->render('register');
    }

    public function register()
    {
        $validation = $this->request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:6'],
        ]);

        if (! $validation) {
            foreach ($this->request->getErrors() as $field => $errors) {
                $this->session->set($field, $errors);
            }

            $this->redirect('/register');
        }

        $id = $this->getDatabase()->insert('users', [
            'email' => $this->request->input('email'),
            'password' => password_hash($this->request->input('password'), PASSWORD_DEFAULT),
        ]);

        dd("User {$this->request->input('email')} added with id: {$id}");
    }
}
