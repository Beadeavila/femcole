<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Route::redirect('/', 'login');

Auth::routes(); 

Route::resource('users', App\Http\Controllers\UserController::class)->middleware('auth');
Route::resource('grades', App\Http\Controllers\GradeController::class)->middleware('auth');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/create', [GetEmployeePerformance::class,'create'])->middleware(['isadmin', 'auth'])->name('create');


Route::post('/upload', [UserController::class], 'upload')->name('user.upload');

