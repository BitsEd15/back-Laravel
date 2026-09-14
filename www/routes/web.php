<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/packages/laravel', [TestController::class, 'sayHello']);
Route::get('/test-log', function () { 
    Log::info('логирование работает!');
    return 'Проверь папку storage/logs!';
});
Route::get('/api/user/{id}', [UserController::class, 'show']); // дз  07.09

Route::get('/laravel1', [TestController::class, 'sayHi']);