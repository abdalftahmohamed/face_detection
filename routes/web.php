<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SpecializationController;
use App\Http\Controllers\Students\AttendanceController;
use App\Http\Controllers\Students\StudentController;
use App\Http\Controllers\Teacher\Teachercontroller;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

     Route::get('/', [HomeController::class,'index'])->name('selection');
     Route::resource('/contacts', ContactController::class);
     Route::get('/contacts.about',[ContactController::class,'about'])->name('contacts.about');
    Route::get('/login/{type}',[LoginController::class,'loginForm'])->middleware('guest')->name('login.show');

    Route::post('/login',[LoginController::class,'login'])->name('login');

    Route::get('/logout/{type}', [LoginController::class,'logout'])->name('logout');


    //==============================Translate all pages============================
    Route::group(
        [
            'prefix' => LaravelLocalization::setLocale(),
            'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'auth']
        ], function () {

    //==============================dashboard============================
        Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
        Route::resource('Specialization', SpecializationController::class);


    //==============================Teachers=====================================
    Route::resource('Teachers', TeacherController::class);


    //==============================Setting====================================
    Route::resource('settings', SettingController::class);

    //==============================Students=====================================
    Route::resource('Students', StudentController::class);

//    Route::resource('Attendance', AttendanceController::class);

});


