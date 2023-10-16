<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
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


    Route::get('/test', function (Request $request){
        return "Authenticated";
    });


    Route::prefix('local/auth')->group(function () {

        Route::post('register', [LocalAuthController::class,'Register']);
        Route::post('requestOTP', [LocalAuthController::class,'Request_otp']);
        Route::post('submitOTP', [LocalAuthController::class,'Submit_otp']);

    });



    //  GLobal

    Route::prefix('global/auth')->group(function () {

            Route::post('register', [GlobalAuthController::class,'Register']);

    });
