<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TimesheetController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\JobController;


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

Route::resource('jobs', JobController::class);

Route::resource('students', StudentController::class);

Route::resource('tasks', TaskController::class);

Route::resource('timesheets', TimesheetController::class);

Route::resource('file_uploads', UploadController::class);
Route::post('upload',[UploadController::class, 'upload'])->name('upload');
