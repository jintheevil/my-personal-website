<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//Authentication APIs
Route::post('/register', [\App\Http\Controllers\AuthController::class, 'register']);
Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login']);


Route::group(['middleware' => ['auth:sanctum']], function() {
   Route::post('/logout', [\App\Http\Controllers\AuthController::class, 'logout']);
});

Route::resource('/posts', \App\Http\Controllers\PostController::class)
    ->except('create');
