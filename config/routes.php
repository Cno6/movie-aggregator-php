<?php

use App\Router\Route;

return [
  Route::get('/', function () {
    include_once APP_PATH . '/views/pages/index.php';
  }),
  Route::get('/movies', function () {
    include_once APP_PATH . '/views/pages/movies.php';
  }),
  Route::get('/404', function () {
    include_once APP_PATH . '/views/pages/404.php';
  })
];
