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


    Route::prefix('auth')->group(function () {

        Route::prefix('local')->group(function () {

            Route::post('nameCheck',[LocalAuthController::class,'nameCheck'] );

            Route::post('register', [LocalAuthController::class,'Register']);
            Route::post('requestOTP', [LocalAuthController::class,'Request_otp']);
            Route::post('submitOTP', [LocalAuthController::class,'Submit_otp']);
            Route::post('login', [LocalAuthController::class,'login']);
            Route::post('logout', [LocalAuthController::class,'logout']);

        });


        Route::prefix('global')->group(function () {
            Route::post('register', [GlobalAuthController::class,'Register']);
            Route::post('requestOTP', [GlobalAuthController::class,'Request_otp']);
            Route::post('submitOTP', [GlobalAuthController::class,'Submit_otp']);
            Route::post('login', [GlobalAuthController::class,'login']);
            Route::post('logout', [GlobalAuthController::class,'logout']);

        });


    });





    Route::get('test', [WorkshopController::class,'user']);
