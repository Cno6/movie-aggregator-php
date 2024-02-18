<?php

use App\Controllers\IndexController;
use App\Controllers\MoviesController;
use App\Controllers\NotFoundController;
use App\Controllers\RegisterController;
use App\Kernel\Router\Route;

return [
    Route::get('/', [IndexController::class, 'index']),
    Route::get('/movies', [MoviesController::class, 'index']),
    Route::get('/admin/movies/add', [MoviesController::class, 'add']),
    Route::post('/admin/movies/add', [MoviesController::class, 'store']),
    Route::get('/register', [RegisterController::class, 'index']),
    Route::post('/register', [RegisterController::class, 'register']),
    Route::get('/not-found', [NotFoundController::class, 'index']),
];
