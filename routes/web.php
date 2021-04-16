<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentHomeController;
use App\Http\Controllers\TeacherHomeController;

use App\Http\Controllers\Student\StudentLoginController;
use App\Http\Controllers\Student\StudentRegisterController;
use App\Http\Controllers\Student\StudentPasswordRestController;
use App\Http\Controllers\Student\StudentForgotPasswordController;

use App\Http\Controllers\Teacher\TeacherLoginController;
use App\Http\Controllers\Teacher\TeacherRegisterController;
use App\Http\Controllers\Teacher\TeacherPasswordRestController;
use App\Http\Controllers\Teacher\TeacherForgotPasswordController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('student')->group(function(){
    Route::get('home',[StudentHomeController::class,'index'])->name('student.home');
    Route::get('login',[StudentLoginController::class,'showLoginForm'])->name('student.login');
    Route::post('login',[StudentLoginController::class,'Login']);
    Route::post('logout',[StudentLoginController::class,'Logout'])->name('student.logout');
    Route::get('password/confirm',[StudentPasswordConfirmController::class,'showConfirmForm'])->name('teacher.password.confirm');
    Route::post('password/confirm',[StudentPasswordConfirmController::class,'confirm']);
    Route::get('register',[StudentRegisterController::class,'showRegistrationForm'])->name('student.register');
    Route::post('register',[StudentRegisterController::class,'register'])->name('student.register.submit');
    Route::get('password/reset',[StudentForgotPasswordController::class,'showLinkRequestForm'])->name('student.password.request');
    Route::post('password/email',[StudentForgotPasswordController::class,'sendResetLinkEmail'])->name('student.password.email');
    Route::get('password/reset/token',[StudentPasswordRestController::class,'showResetForm'])->name('student.password.reset');
    Route::post('password/reset',[StudentPasswordRestController::class,'reset'])->name('student.reset')->name('student.password.update');
    Route::get('{id}/profile',[StudentController::class,'profile'])->name('student.profile');
    Route::get('{id}/profile/edit',[StudentController::class,'edit'])->name('student.profile.edit');
    Route::patch('{id}/profile',[StudentController::class,'update'])->name('student.profile.update');
    Route::get('{id}/courseRegister',[StudentController::class,'showCourseRegistrationForm'])->name('student.course.register');
    Route::post('{id}/courseRegister',[StudentController::class,'courseRegister'])->name('student.course.register.submit');
    Route::get('{id}/grade',[StudentController::class,'grade'])->name('student.grade');
    Route::get('{id}/service',[StudentController::class,'service'])->name('student.service');
});

Route::prefix('teacher')->group(function(){
    Route::get('home',[TeacherHomeController::class,'index'])->name('teacher.home');
    Route::get('login',[TeacherLoginController::class,'showLoginForm'])->name('teacher.login');
    Route::post('login',[TeacherLoginController::class,'Login']);
    Route::post('logout',[TeacherLoginController::class,'Logout'])->name('teacher.logout');
    Route::get('password/confirm',[TeacherPasswordConfirmController::class,'showConfirmForm'])->name('teacher.password.confirm');
    Route::post('password/confirm',[TeacherPasswordConfirmController::class,'confirm']);
    Route::get('register',[TeacherRegisterController::class,'showRegistrationForm'])->name('teacher.register');
    Route::post('register',[TeacherRegisterController::class,'register'])->name('teacher.register.submit');
    Route::get('/password/reset',[TeacherForgotPasswordController::class,'showLinkRequestForm'])->name('teacher.password.request');
    Route::post('/password/email',[TeacherForgotPasswordController::class,'sendResetLinkEmail'])->name('teacher.password.email');
    Route::get('/password/reset/token',[TeacherPasswordRestController::class,'showResetForm'])->name('teacher.password.reset');
    Route::post('/password/reset',[TeacherPasswordRestController::class,'reset'])->name('teacher.password.update');
    Route::get('{id}/profile',[TeacherController::class,'profile'])->name('teacher.profile');
    Route::get('/{id}/profile/edit',[TeacherController::class,'edit'])->name('teacher.profile.edit');
    Route::patch('/{id}/profile',[TeacherController::class,'update'])->name('teacher.profile.update');
    Route::get('/{id}/students',[TeacherController::class,'students'])->name('teacher.students');
    Route::get('/{id}/grade/{courseId}',[TeacherController::class,'grade'])->name('teacher.grade');
    Route::get('{id}/submitGrade/{courseId}',[TeacherController::class,'submitGrade'])->name('teacher.grade.submit');
    Route::get('{id}/service',[TeacherController::class,'service'])->name('teacher.service');
});