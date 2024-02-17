<?php

namespace App\Kernel\View;

use App\Kernel\Exceptions\ViewNotFoundException;

class View
{
    public function renderPage(string $page)
    {

        $viewPath = APP_PATH."/views/pages/$page.php";

        if (! file_exists($viewPath)) {
            throw new ViewNotFoundException("View $page not found");
        }

        extract([
            'view' => $this,
        ]);

        include_once $viewPath;
    }

    public function renderComponent(string $component)
    {
        $componentPath = APP_PATH."/views/components/$component.php";

        if (! file_exists($componentPath)) {
            echo "$component not found";

            return;
        }

        include_once $componentPath;
    }
}
