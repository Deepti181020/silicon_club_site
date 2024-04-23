<?php

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
    return view('index'); 
})->name('index');
Route::get('/about', function(){
    return view('about');
})->name('about');
Route::get('/contact', function(){
    return view('contact');
})->name('contact');
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::get('/registration', [AuthController::class, 'registration'])->name('registration');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('registration.post');
Route::get('index', [AuthController::class, 'index']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');


