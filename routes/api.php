<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*Models*/
use App\Models\User;

/*Perfil y oauth*/
use App\Http\Controllers\Auth\authController;
use App\Http\Controllers\Auth\profileController;
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
    $user =$request->user();
    return response()->json([
                        "user" => $user->load('profile'),
                        "rol" => $user->roles
                    ],200);
});

Route::prefix('auth')->group(function () {
    
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/signup', [AuthController::class, 'signup']);

    Route::middleware(['auth:api'])->group(function () {
        Route::post('/logout', [AuthController::class, 'logout']);
        Route::post('/asign/roll', [profileController::class, 'asign_roll']);
        Route::post('/profile/data', [profileController::class, 'profile_data']);
    });

    
});