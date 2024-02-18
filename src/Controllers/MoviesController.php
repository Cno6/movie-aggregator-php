<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;

class MoviesController extends Controller
{
    public function index()
    {
        $this->render('movies');
    }

    public function add()
    {
        $this->render('admin/movies/add');
    }

    public function store()
    {
        $validation = $this->request->validate([
            'name' => ['required', 'min:3', 'max:50'],
        ]);

        if (! $validation) {
            foreach ($this->request->getErrors() as $field => $errors) {
                $this->session->set($field, $errors);
            }

            $this->redirect('/admin/movies/add');
        }

        dd('Validation passed');
    }
}
