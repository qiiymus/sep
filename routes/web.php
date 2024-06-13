<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\TimetableController;
use App\Http\Controllers\ResultController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ManageKAFATimetable', [TimetableController::class], 'ParentsViewTT');
Route::get('/ManageKAFATimetable', [TimetableController::class], 'TeacherViewTT');
Route::get('/ManageKAFATimetable', [TimetableController::class], 'KAViewTT');
Route::get('/ManageStudentResults', [ResultController::class, 'showKAChooseClassPage']);
