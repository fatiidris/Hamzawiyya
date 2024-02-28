<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\ClassController;
use App\Http\Controllers\Admin\ParentController;
use App\Http\Controllers\Admin\AttendanceController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('/login');
});

Auth::routes();
// route for users
Route::resource('users', UserController::class);
//route for students
Route::resource('/student', StudentController::class);

//route for teacher
Route::resource('/teacher', TeacherController::class);
//route for class
Route::resource('/class', ClassController::class);
//route for parent
Route::resource('/parent', ParentController::class);

Route::get('attendance', 'AttendanceController@index')->name('attendance.index');


// route for dashboard
Route::resource('admin/dashboard', DashboardController::class);



Route::get('/home', [HomeController::class, 'index'])->name('home');
  
Route::prefix('admin')->middleware('auth')->group(function() {
    Route::resource('roles', RoleController::class);
    // Route::resource('users', UserController::class);
    // route for dashboard
// Route::resource('admin/dashboard', DashboardController::class);


});