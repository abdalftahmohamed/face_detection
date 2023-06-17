<?php


use App\Http\Controllers\Students\dashboard\ProfileController;
use App\Http\Controllers\Students\StudentController;
use App\Models\Student;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| student Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//==============================sign_up============================
Route::get('/student/signup', function () {
    $specializations=\App\Models\Specialization::all();
    return view('pages.Students.signup',compact('specializations'));
})->name('signup.Students');


Route::post('/student/signup',[StudentController::class,'singnup_student'])->name('students.signup');

Route::get('/student/signup/image', function () {
    return view('pages.Students.capture');
})->name('signup.Students.image');

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'auth:student']
    ], function () {



    //==============================dashboard============================
    Route::get('/student/dashboard', function () {
        $student_id = Student::findOrFail(\Illuminate\Support\Facades\Auth::user()->id);
        $gg=$student_id->image;
//        return $gg;
//        return \Illuminate\Support\Facades\Auth::user()->id;
        return view('pages.Students.dashboard',compact('gg'));
    })->name('dashboard.Students');

    Route::resource('profile-student', ProfileController::class);
});
