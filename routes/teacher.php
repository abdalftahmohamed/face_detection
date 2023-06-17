<?php


use App\Http\Controllers\Teacher\dashboard\ProfileController;
use App\Http\Controllers\Teacher\dashboard\QuestionController;
use App\Http\Controllers\Teacher\dashboard\QuizzController;
use App\Http\Controllers\Teacher\dashboard\SpecializationController;
use App\Http\Controllers\Teacher\dashboard\StudentController;
use App\Http\Controllers\Teacher\Teachercontroller;
use App\Http\Controllers\TeachersingupController;
use App\Models\Student;
use App\Models\Student_has_Specialization;
use App\Models\Teacher;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| teacher Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//==============================sign_up============================
Route::get('/teacher/signup', function () {
    $specializations=\App\Models\Specialization::all();
    return view('pages.Teachers.signup',compact('specializations'));
})->name('signup.teachers');

Route::post('/signup/teach',[TeacherController::class,'sinup'])->name('signup.teach');


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'auth:teacher']
    ], function () {

    //==============================dashboard============================
    Route::get('/teacher/dashboard', function () {
        $ids = DB::table('specializations')->where('id', auth()->user()->specialization_id)->pluck('id');
//        return $ids;
        $students = Student_has_Specialization::whereIn('specialization_id', $ids)->get();
        return view('pages.Teachers.dashboard.dashboard', compact('students'));
    });


    //==============================students============================
    Route::resource('student', StudentController::class);
    Route::post('attendance', [StudentController::class, 'attendance'])->name('attendance');

    Route::get('profile', [ProfileController::class, 'index'])->name('profile.show');
    Route::post('profile/{id}', [ProfileController::class, 'update'])->name('profile.update');



});
