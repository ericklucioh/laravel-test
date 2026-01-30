<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "hello world";
});


use App\Http\Controllers\Api\UserController;

Route::get('/api/users', [UserController::class, 'index']);