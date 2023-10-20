<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkshopController;
use App\Http\Controllers\API\LocalAuthController;
use App\Http\Controllers\API\GlobalAuthController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });



    Route::get('/countries', [LocalAuthController::class, 'startUpData']);



    // LOCAL


    Route::prefix('auth')->group(function () {

        Route::prefix('local')->group(function () {

            Route::post('register', [LocalAuthController::class,'Register']);
            Route::post('requestOTP', [LocalAuthController::class,'Request_otp']);
            Route::post('submitOTP', [LocalAuthController::class,'Submit_otp']);
            Route::post('logout', [LocalAuthController::class,'logout']);
            Route::post('login', [LocalAuthController::class,'login']);

        });

        Route::prefix('global')->group(function () {
            Route::post('register', [GlobalAuthController::class,'Register']);
            Route::post('requestOTP', [LocalAuthController::class,'Request_otp']);
            Route::post('submitOTP', [LocalAuthController::class,'Submit_otp']);

        });


    });






    // GLOBAL




    // Both

    Route::get('test', [WorkshopController::class,'user']);
