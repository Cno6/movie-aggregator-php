<?php

namespace App\Kernel\View;

class View
{
  public function render(string $page)
  {
    include_once APP_PATH . "/views/pages/$page.php";
  }
}
