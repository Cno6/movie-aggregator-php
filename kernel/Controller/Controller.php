<?php

namespace App\Kernel\Controller;

abstract class Controller
{
    private $view;

    public function render($name)
    {
        $this->view->renderPage($name);
    }

    public function setView($view)
    {
        $this->view = $view;
    }
}
