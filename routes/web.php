<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

// papar login form
Route::get('/studentlogin', function () {
    return view('students.login');
})->name('login');

// submit login form
Route::post('/studentlogin', [AuthController::class, 'login'])->name('studentlogin');

// submit logout
Route::get('/studentlogout', [AuthController::class, 'logout'])->name('studentlogout');

//papar home page
Route::get('/student', function () {
    return view('students.home');
})->name('home');


Route::middleware('auth')->group(function () {


    //papar data
Route::get('/viewstudent', [StudentController::class, 'show'])->name('studentview');

//papar insert form
Route::get('/studentform', function () {
    return view('students.student_form');
})->name("studentForm");

//submit insert form
Route::post('/studentinsert', [StudentController::class, 'store'])->name('studentinsert');

//cari id dan papar update form
Route::get('/studentupdate/{id}', [StudentController::class, 'edit'])->name('studentviewupdate');

//submit update form
Route::post('/studentupdateid/{id}', [StudentController::class, 'update'])->name('studentupdateid');

//delete data
Route::delete('/studentdelete/{id}', [StudentController::class, 'delete'])->name('studentdelete');

});


