<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\TimetableController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ManageKAFATimetable', [TimetableController::class], 'ParentsViewTT');
Route::get('/ManageKAFATimetable', [TimetableController::class], 'TeacherViewTT');
Route::get('/ManageKAFATimetable', [TimetableController::class], 'KAViewTT');


use App\Http\Controllers\ResultController;

Route::get('/ka-choose-class', [ResultController::class, 'showKAChooseClassPage'])->name('ka.choose.class');
