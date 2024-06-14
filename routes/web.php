<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\TimetableController;
use App\Http\Controllers\BulletinController;

Route::get('/', function () {
    return view('welcome');
});

//timetable
Route::get('/ParentViewTT', [TimetableController::class, 'ParentViewTT'])->name('ParentViewTT');
Route::get('/TeacherViewTT', [TimetableController::class, 'TeacherViewTT'])->name('TeacherViewTT');
Route::get('/KAViewTT', [TimetableController::class, 'KAViewTT'])->name('KAViewTT');
Route::get('/KAAddTT', [TimetableController::class, 'KAAddTT'])->name('KAAddTT');
Route::get('/KAEditTT', [TimetableController::class, 'KAEditTT'])->name('KAEditTT');
Route::get('/KAManageTT', [TimetableController::class, 'KAManageTT'])->name('KAManageTT');
Route::resource('timetable', TimetableController::class);
Route::get('/ShowTimetable/{id}', [TimetableController::class, 'show'])->name('timetable.show');
Route::get('/EditTimetable/{id}', [TimetableController::class, 'edit'])->name('timetable.edit');
Route::patch('/UpdateTimetable/{id}', [TimetableController::class, 'update'])->name('timetable.update');
Route::delete('/DeleteTimetable/{id}', [TimetableController::class, 'destroy'])->name('timetable.destroy');
//Route::get('/ShowTimetableParent/{id}', [TimetableController::class, 'pshow'])->name('timetable.pshow');
//Route::get('/ShowTimetableTeacher/{id}', [TimetableController::class, 'tshow'])->name('timetable.tshow');


//login
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'loginPost'])->name('login.post');
Route::get('/registration',[UserController::class, 'registration'])->name('registration');
Route::post('/registration', [UserController::class, 'registrationPost'])->name('registration.post');
Route::get('/logout',[UserController::class,'logout'])->name('logout');
Route::get('/home', [UserController::class, 'KAHome'])->name('KAHome');


//report
Route::get('/KAReport',[ReportController::class,'KAReport'])->name('KAReport');
Route::get('/KACreateAR',[ReportController::class,'KACreateAR'])->name('KACreateAR');
Route::post('/KACreateAR',[ReportController::class,'KACreateARPost'])->name('KACreateAR.post');
Route::get('KAEditAR/{id}/edit',[ReportController::class,'edit'])->name('KAEditAR.edit');
Route::post('KAEditAR/{id}',[ReportController::class,'update'])->name('KAEditAR.post');
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
Route::resource('/bulletin', BulletinController::class);


// Routes for Result
Route::get('/ManageStudentResults', [ResultController::class, 'chooseClass'])->name('ManageStudentResults.ChooseClass');
Route::get('/ManageStudentResults/{id}/KAResultPage', [ResultController::class, 'show'])->name('ManageStudentResults.show');
Route::get('/ManageStudentResults/KAAddResult', [ResultController::class, 'create'])->name('ManageStudentResults.create');
Route::post('/ManageStudentResults/KAResultPage', [ResultController::class, 'store'])->name('ManageStudentResults.store');
Route::get('/ManageStudentResults/{id}/edit', [ResultController::class, 'edit'])->name('ManageStudentResults.edit');
Route::patch('/ManageStudentResults/{id}', [ResultController::class, 'update'])->name('ManageStudentResults.update');
Route::delete('/ManageStudentResults/{id}', [ResultController::class, 'destroy'])->name('ManageStudentResults.destroy');
Route::get('/KAResultPage', [ResultController::class, 'index'])->name('kareresults.index');
Route::get('/choose-class', [ResultController::class, 'chooseClass'])->name('choose.class');
Route::get('/students-list', [ResultController::class, 'listStudents'])->name('students.list');