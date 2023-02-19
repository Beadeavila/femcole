<?php

use App\Mail\SendRating;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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


Route::post('/upload', [UserController::class], 'upload')->name('user.upload');

Route::get('/mail', function () {
    //return new SendRating("Óscar");

    $response = Mail::to('beadeavila10@gmail.com')->send(new SendRating("Chicas"));

    dump($response);
});