<?php

namespace App\Kernel;

use App\Kernel\Router\Router;
use App\Kernel\Http\Request;

class App
{
  public function run()
  {
    $router = new Router();
    $request = Request::createFromGlobals();

    $uri = $request->uri();
    $method = $request->method();

    $router->dispatch($uri, $method);
  }
}
