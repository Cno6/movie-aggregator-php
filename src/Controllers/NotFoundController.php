<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;

class NotFoundController extends Controller
{
    public function index()
    {
        $this->render('not-found');
    }
}
