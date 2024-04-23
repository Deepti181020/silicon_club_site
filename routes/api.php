<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\UserAdminLog;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::get('/',[Democontroller::class,'index']);
// Route::get('/welcome',[Democontroller::class,'Welcome']);
// Route::get('/user',[UserAdminLog::class,'AdminLogin']);
// Route::post('/user',[UserAdminLog::class,'signin']);
// Route::post('/user/register',[UserAdminLog::class,'signup']);




