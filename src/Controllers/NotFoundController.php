<?php

namespace App\Controllers;

use App\Kernel\View\View;

class NotFoundController
{
    public function index()
    {
        $view = new View();

        $view->render('not-found');
    }
}
