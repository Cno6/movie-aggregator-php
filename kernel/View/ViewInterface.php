<?php

namespace App\Kernel\View;

interface ViewInterface
{
    public function renderPage(string $page): void;

    public function renderComponent(string $component): void;
}
