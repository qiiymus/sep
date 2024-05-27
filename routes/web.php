<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', [app\Http\Controllers\PageController::class, 'hello']);