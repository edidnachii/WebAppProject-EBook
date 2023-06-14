<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\StudentController;

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
    return view('mainpage');
});

Route::get('/add-student', function () {
    return view('add-student');
});
    Route::get('student', [StudentController::class, 'index']);
    Route::resource('addstudent', StudentController::class);

Route::get('/student', [StudentController:: class, 'index']);



