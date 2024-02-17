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
            dd('Validation failed', $this->request->getErrors());
        }

        dd('Validation passed');
    }
}
