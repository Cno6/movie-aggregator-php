<?php

namespace App\Kernel\View;

use App\Kernel\Exceptions\ViewNotFoundException;
use App\Kernel\Session\SessionInterface;

class View implements ViewInterface
{
    public function __construct(
        private SessionInterface $session
    ) {
    }

    public function renderPage(string $page): void
    {

        $viewPath = APP_PATH."/views/pages/$page.php";

        if (! file_exists($viewPath)) {
            throw new ViewNotFoundException("View $page not found");
        }

        extract($this->defaultData());

        include_once $viewPath;
    }

    public function renderComponent(string $component): void
    {
        $componentPath = APP_PATH."/views/components/$component.php";

        if (! file_exists($componentPath)) {
            echo "$component not found";

            return;
        }

        include_once $componentPath;
    }

    private function defaultData(): array
    {
        return [
            'view' => $this,
            'session' => $this->session,
        ];
    }
}
