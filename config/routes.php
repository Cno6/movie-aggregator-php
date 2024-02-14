<?php

return [
  '/' => function () {
    include_once APP_PATH . '/views/pages/index.php';
  },
  '/movies' => function () {
    include_once APP_PATH . '/views/pages/movies.php';
  },
  '/404' => function () {
    include_once APP_PATH . '/views/pages/404.php';
  },
];
