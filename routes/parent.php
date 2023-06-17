<?php


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

use App\Http\Controllers\Parents\dashboard\ChildrenController;
use App\Models\Student;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'auth:parent']
    ], function () {

    //==============================dashboard============================
    Route::get('/parent/dashboard', function () {
        $sons = Student::where('parent_id', auth()->user()->id)->get();
        return view('pages.parents.dashboard', compact('sons'));
    })->name('dashboard.parents');

//===========================pages====================================

    Route::resource('sons', ChildrenController::class);

    Route::get('results/{id}', [ChildrenController::class,'results'])->name('sons.results');



});
