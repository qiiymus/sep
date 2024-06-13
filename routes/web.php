<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\ReportController;
use app\Http\Controllers\TimetableController;
use App\Http\Controllers\BulletinController;
use App\Http\Controllers\ResultController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ManageKAFATimetable', [TimetableController::class], 'ParentsViewTT');
Route::get('/ManageKAFATimetable', [TimetableController::class], 'TeacherViewTT');
Route::get('/ManageKAFATimetable', [TimetableController::class], 'KAViewTT');




Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');
Route::get('/registration',[AuthManager::class, 'registration'])->name('registration');
Route::post('/registration', [AuthManager::class, 'registrationPost'])->name('registration.post');
Route::get('/logout',[AuthManager::class,'logout'])->name('logout');

Route::get('/KAReport',[ReportController::class,'KAReport'])->name('KAReport');
Route::get('/KACreateAR',[ReportController::class,'KACreateAR'])->name('KACreateAR');
//Route::get('/KACreateAR',[ReportController::class,'KACreateARPost'])->name('KACreateAR.post');
Route::get('/KAEditAR',[ReportController::class,'KAEditAR'])->name('KAEditAR');
Route::get('/KAViewAR',[ReportController::class,'KAViewAR'])->name('KAViewAR');
Route::get('/KACreatePR',[ReportController::class,'KACreatePR'])->name('KACreatePR');
Route::get('/KAEditPR',[ReportController::class,'KAEditPR'])->name('KAEditPR');
Route::get('/KAViewPR',[ReportController::class,'KAViewPR'])->name('KAViewPR');
Route::get('/MAReport',[ReportController::class,'MAReport'])->name('MAReport');
Route::get('/MAViewAR',[ReportController::class,'MAViewAR'])->name('MAViewAR');
Route::get('/MAViewPR',[ReportController::class,'MAViewPR'])->name('MAViewPR');


Route::resource("/bulletin", BulletinController::class);


// Root route for results
Route::get('/', [ResultController::class, 'ChooseClass']);
Route::get('/ManageStudentResults/KAStudentList', [ResultController::class, 'index'])->name('ManageStudentResults.index');
Route::resource('/ManageStudentResults', ResultController::class);
