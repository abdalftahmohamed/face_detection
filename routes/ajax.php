<?php


use App\Http\Controllers\ajaxController;
use App\Http\Controllers\OnlineClasse\OnlineClasseController;
use App\Http\Controllers\Students\AttendanceController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| ajax Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(
    [
        'middleware' =>  'auth:web,teacher,student'
    ], function () {
    Route::get('/Get_classrooms/{id}', [ajaxController::class,'getClassrooms']);
    Route::get('/Get_Sections/{id}', [ajaxController::class,'Get_Sections']);


    //==============================online_classes=====================================
    Route::resource('Attendance', AttendanceController::class);
    Route::get('courses/{id}', [AttendanceController::class,'courses'])->name('courses');
    Route::get('export_excel', [AttendanceController::class, 'export'])->name('export_excel');

});

