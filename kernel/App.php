<?php

namespace App\Kernel;

use App\Kernel\Container\Container;

class App
{
    private $container;

    public function __construct()
    {
        $this->container = new Container();
    }

    public function run()
    {
        $uri = $this->container->request->uri();
        $method = $this->container->request->method();

        $this->container->router->dispatch($uri, $method);
    }
}
