<?php

namespace App\Kernel\Controller;

use App\Kernel\Http\Redirect;
use App\Kernel\Http\Request;
use App\Kernel\View\View;

abstract class Controller
{
    private View $view;

    public Request $request;

    public Redirect $redirect;

    public function render(string $name): void
    {
        $this->view->renderPage($name);
    }

    public function setView(View $view): void
    {
        $this->view = $view;
    }

    public function setRequest(Request $request): void
    {
        $this->request = $request;
    }

    public function setRedirect(Redirect $redirect): void
    {
        $this->redirect = $redirect;
    }

    public function redirect(string $url): void
    {
        $this->redirect->to($url);
    }
}
