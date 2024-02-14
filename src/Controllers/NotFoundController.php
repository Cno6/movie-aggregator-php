<?php

namespace App\Controllers;

class NotFoundController
{
  public function index()
  {
    include_once APP_PATH . '/views/pages/not-found.php';
  }
}
