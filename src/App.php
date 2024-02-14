<?php

namespace App;

class App
{
  public function run()
  {
    $routes = require_once APP_PATH . '/config/routes.php';

    $uri = $_SERVER['REQUEST_URI'];

    if (isset($routes[$uri])) {
      return $routes[$uri]();
    } else {
      return $routes['/404']();
    }
  }
}
