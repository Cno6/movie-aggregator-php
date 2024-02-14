<?php

namespace App\Controllers;

class IndexController
{
  public function index()
  {
    include_once APP_PATH . '/views/pages/index.php';
  }
}
