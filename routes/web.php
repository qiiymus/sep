<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\ReportController;
use app\Http\Controllers\TimetableController;
use App\Http\Controllers\BulletinController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ManageKAFATimetable', [TimetableController::class], 'ParentViewTT');
Route::get('/ManageKAFATimetable', [TimetableController::class], 'TeacherViewTT');
Route::get('/ManageKAFATimetable', [TimetableController::class], 'KAViewTT');


use App\Http\Controllers\ResultController;

Route::get('/ka-choose-class', [ResultController::class, 'showKAChooseClassPage'])->name('ka.choose.class');


Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');
Route::get('/registration',[AuthManager::class, 'registration'])->name('registration');
Route::post('/registration', [AuthManager::class, 'registrationPost'])->name('registration.post');
Route::get('/logout',[AuthManager::class,'logout'])->name('logout');

Route::get('/KAReport',[ReportController::class,'KAReport'])->name('KAReport');
Route::get('/KACreateAR',[ReportController::class,'KACreateAR'])->name('KACreateAR');
Route::post('/KACreateAR',[ReportController::class,'KACreateARPost'])->name('KACreateAR.post');
Route::get('/KAEditAR',[ReportController::class,'KAEditAR'])->name('KAEditAR');
Route::get('/KAViewAR',[ReportController::class,'KAViewAR'])->name('KAViewAR');
Route::get('/KACreatePR',[ReportController::class,'KACreatePR'])->name('KACreatePR');
Route::post('/KACreatePR',[ReportController::class,'KACreatePRPost'])->name('KACreatePR.post');
Route::get('/KAEditPR',[ReportController::class,'KAEditPR'])->name('KAEditPR');
Route::get('/KAViewPR',[ReportController::class,'KAViewPR'])->name('KAViewPR');
Route::get('/MAReport',[ReportController::class,'MAReport'])->name('MAReport');
Route::get('/MAViewAR',[ReportController::class,'MAViewAR'])->name('MAViewAR');
Route::get('/MAViewPR',[ReportController::class,'MAViewPR'])->name('MAViewPR');


Route::resource('/bulletin', BulletinController::class);
