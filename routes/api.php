<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*Perfil y oauth*/
use App\Http\Controllers\Auth\authController;
use App\Http\Controllers\Profile\profileController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('auth')->group(function () {
    
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/signup', [AuthController::class, 'signup']);

    Route::middleware(['auth:api'])->group(function () {
        Route::get('/logout', [AuthController::class, 'logout']);
        Route::post('/asign/roll', [profileController::class, 'asign_roll']);
        Route::post('/profile/data', [profileController::class, 'profile_data']);
    });
});