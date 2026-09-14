<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\dzMockControlller;
use App\Http\Controllers\searchController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewProductController;
use App\Http\Controllers\NoteController;

// Route::get('/user', [TestController::class, 'sayHello']);

Route::prefix('user')->group(function(){//группируем пользовательские роуты
    Route::get('/get-profile',[TestController::class, 'sayHello']);
});

Route::prefix('crud')->group(function(){
    Route::get('/',[TestController::class, 'read']);
    Route::get('/{id}/{name}',[TestController::class, 'readByID']);
    Route::post('/create',[TestController::class, 'create']);
    Route::put('/put',[TestController::class, 'update']);
    Route::delete('/delete',[TestController::class, 'delete']);
});

//ДЗ
Route::prefix('v1')->group(function(){//задание 1
    Route::get('/status',[dzMockControlller::class, 'index']);

    Route::get('/show/{id}',[dzMockControlller::class, 'show']);
    Route::post('/store',[dzMockControlller::class, 'store']);//создание post запрос
    Route::delete('/delete/{id}',[dzMockControlller::class, 'destroy']);
    Route::put('/update/{id}',[dzMockControlller::class, 'update']);
});


Route::get('/search/{category}/{min_price?}', [SearchController::class, 'search'])//задание 2
    ->where('category', '[a-zA-Zа-яА-Я]+')
    ->where('min_price', '[0-9]+');

Route::apiResource('products', ProductController::class);//задание 3

// Route::get('get-products/{id}', [NewProductController::class,'show']);
Route::post('get-products', [NewProductController::class,'store']);

//ДЗ
Route::prefix('notes')->group(function(){// дз
    Route::get('/index',[NoteController::class, 'index']);
    Route::post('/store',[NoteController::class, 'store']);
    Route::get('/{note}', [NoteController::class, 'show']);
});