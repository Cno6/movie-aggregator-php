<?php

namespace App\Controllers;

use App\Kernel\View\View;

class IndexController
{
    public function index()
    {
        $view = new View();

        $view->render('index');
    }
}
