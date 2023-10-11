<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;

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


    Route::prefix('auth')->group(function () {

        Route::post('register', [AuthController::class,'local_Register']);
        Route::post('requestOTP', [AuthController::class,'local_request_otp']);
        Route::post('submitOTP', [AuthController::class,'local_submit_otp']);
    });
