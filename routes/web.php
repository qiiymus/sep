<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\TimetableController;
use App\Http\Controllers\BulletinController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ParentViewTT', [TimetableController::class, 'ParentViewTT'])->name('ParentViewTT');
Route::get('/TeacherViewTT', [TimetableController::class, 'TeacherViewTT'])->name('TeacherViewTT');
Route::get('/KAViewTT', [TimetableController::class, 'KAViewTT'])->name('KAViewTT');
Route::get('/KAAddTT', [TimetableController::class, 'KAAddTT'])->name('KAAddTT');
Route::get('/KAEditTT', [TimetableController::class, 'KAEditTT'])->name('KAEditTT');
Route::get('/KAManageTT', [TimetableController::class, 'KAManageTT'])->name('KAManageTT');


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



// <--KAFA ADMIN BULLETIN-->
Route::get('/bulletin', [BulletinController::class, 'index'])->name('bulletin.index');
Route::get('/bulletin/create', [BulletinController::class, 'create'])->name('bulletin.create');
Route::post('/bulletin', [BulletinController::class, 'store'])->name('bulletin.store');
Route::get('/bulletin/{id}', [BulletinController::class, 'show'])->name('bulletin.show');
Route::get('/bulletin/{id}/edit', [BulletinController::class, 'edit'])->name('bulletin.edit');
Route::patch('/bulletin/{id}', [BulletinController::class, 'update'])->name('bulletin.update');
Route::delete('/bulletin/{id}', [BulletinController::class, 'destroy'])->name('bulletin.destroy');

// <--PARENTS BULLETIN-->

Route::get('/bulletinParents',[BulletinController::class, 'indexparents']);
Route::get('/viewbulletinParents/{id}', [BulletinController::class, 'showparents'])->name('viewbulletinParents');

// <--TEACHER BULLETIN-->

Route::get('/bulletinTeachers', [BulletinController::class, 'indexteacher']);
Route::get('/viewbulletinTeacher/{id}', [BulletinController::class, 'showteacher'])->name('bulletin.viewteacher');



// Routes for ResultController
Route::get('/ManageStudentResults', [ResultController::class, 'ChooseClass'])->name('ManageStudentResults.ChooseClass');
Route::get('/ManageStudentResults/KAStudentList', [ResultController::class, 'index'])->name('ManageStudentResults.index');
Route::get('/ManageStudentResults/{id}/KAResultPage', [ResultController::class, 'show'])->name('ManageStudentResults.show');

Route::resource('/bulletin', BulletinController::class);
