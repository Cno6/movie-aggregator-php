<?php
define("APP_PATH", __DIR__);

require_once __DIR__ . '/vendor/autoload.php';

use App\Kernel\App;

$app = new App();

$app->run();

