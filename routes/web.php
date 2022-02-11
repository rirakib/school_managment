<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ShiftController;
use App\Http\Controllers\StuClassController;
use App\Http\Controllers\StudentTypeController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('login',[LoginController::class,'login'])->name('login');
Route::post('login',[LoginController::class,'loginCheck'])->name('login.check');
Route::get('logout',[LoginController::class,'logout'])->name('logout');


Route::group(['middleware'=>['login_check']],function(){
    Route::get('/',[DashboardController::class,'index'])->name('dashboard.index');
    Route::resource('class',StuClassController::class,['name'=>'class']);
    Route::resource('subject',SubjectController::class,['name'=>'subject']);
    Route::resource('teacher',TeacherController::class,['name'=>'teacher']);
    Route::resource('group',GroupController::class,['name'=>'group']);
    Route::resource('student-type',StudentTypeController::class,['name'=>'student.type']);
    Route::resource('shift',ShiftController::class,['name'=>'shift']);
});