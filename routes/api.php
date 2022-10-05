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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('v1')->namespace('App\Http\Controllers\Api')->group(function() {
    Route::name('fares.')->group(function() {
        Route::resource('fares', 'FareController');
    });

    Route::name('users.')->group(function() {
        Route::resource('users', 'UserController');
    });

    Route::name('operators.')->group(function() {
        Route::resource('operators', 'OperatorController');
    });
});