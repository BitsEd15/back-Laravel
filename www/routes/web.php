<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test-log', function () {
    Log::info('Бро, логирование работает!');
    return 'Проверь папку storage/logs!';
});