<?php

namespace App\Router;

class Router
{
  private array $routes = [
    'GET' => [],
    'POST' => [],
  ];

  public function __construct($var = null) {
    $this->initRoutes();
  }

  public function dispatch(string $uri, string $method)
  {
    $route = $this->findRoute($uri, $method);

    if ($route) {
      return $route();
    } else {
      return $this->routes['GET']['/404']();
    }
  }

  private function initRoutes() {
    $routes = $this->getRoutes();

    foreach ($routes as $route) {
      $method = $route->getMethod();
      $uri = $route->getUri();

      $this->routes[$method][$uri] = $route->getAction();
    }
  }

  /**
   * @return Route[]
   */
  private function getRoutes()
  {
    return require_once APP_PATH . '/config/routes.php';
  }

  private function findRoute(string $uri, string $method) {
    if (!isset($this->routes[$method][$uri])) {
      return false;
    }

    return $this->routes[$method][$uri];
  }
}
