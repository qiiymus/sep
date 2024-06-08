<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


use App\Http\Controllers\ResultController;

Route::get('/ka-choose-class', [ResultController::class, 'showKAChooseClassPage'])->name('ka.choose.class');
