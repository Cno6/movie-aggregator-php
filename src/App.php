<?php

namespace App;

use App\Router\Router;
use App\Http\Request;

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
