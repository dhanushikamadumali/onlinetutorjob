<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\Auth\App\Http\Controllers\AuthController;

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



Route::post('register',[AuthController::class,'register']);
Route::post('login', [AuthController::class, 'login']);
Route::get('index', [AuthController::class, 'index']);
Route::post('updateuser/{id}', [AuthController::class, 'update']);
Route::post('deleteuser/{id}', [AuthController::class, 'destroy']);
Route::get('viewteacher', [AuthController::class, 'viewteacher']);
Route::get('singleteacher/{id}', [AuthController::class, 'singleteacher']);
Route::post('logout', [AuthController::class, 'logout']);
