<?php

use App\Controllers\IndexController;
use App\Controllers\MoviesController;
use App\Controllers\NotFoundController;
use App\Kernel\Router\Route;

return [
    Route::get('/', [IndexController::class, 'index']),
    Route::get('/movies', [MoviesController::class, 'index']),
    Route::get('/not-found', [NotFoundController::class, 'index']),
];
