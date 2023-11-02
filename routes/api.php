<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkshopController;
use App\Http\Controllers\API\Auth\AuthController;
use App\Http\Controllers\API\Lessons\GameController;
use App\Http\Controllers\API\Auth\LocalAuthController;
use App\Http\Controllers\API\Lessons\LessonController;
use App\Http\Controllers\API\Auth\GlobalAuthController;



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



    Route::get('/countries', [AuthController::class, 'startUpData']);


    Route::prefix('auth')->group(function () {

        Route::post('nameCheck',[AuthController::class,'nameCheck'] );
        Route::post('login', [AuthController::class,'login']);
        Route::post('logout', [AuthController::class,'logout']);

        Route::prefix('local')->group(function () {

            Route::post('register', [LocalAuthController::class,'Register']);
            Route::post('requestOTP', [LocalAuthController::class,'Request_otp']);
            Route::post('submitOTP', [LocalAuthController::class,'Submit_otp']);

        });

        Route::prefix('global')->group(function () {
            Route::post('register', [GlobalAuthController::class,'Register']);
            Route::post('requestOTP', [GlobalAuthController::class,'Request_otp']);
            Route::post('submitOTP', [GlobalAuthController::class,'Submit_otp']);

        });


    });

    Route::prefix('game')->group(function () {
        Route::get('grade',[GameController::class,'grade']);
        Route::get('lesson',[GameController::class,'lesson']);
        Route::get('/',[GameController::class,'game']);
    });





    Route::get('lessons', [WorkshopController::class,'lessons']);
    Route::get('test', [LessonController::class,'lessonTest']);
