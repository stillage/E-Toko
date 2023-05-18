<?php

use App\Http\Controllers\TokenController;
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
Route::post('login', [TokenController::class, 'login']);
Route::middleware('auth:sanctum')->group(function() {
    Route::get('/user', [TokenController::class, 'user']);
    Route::post('/logout', [TokenController::class, 'destroy']);
});



