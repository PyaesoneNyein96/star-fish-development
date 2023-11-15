<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkshopController;
use App\Http\Controllers\API\Auth\AuthController;
use App\Http\Controllers\API\Chat\ChatController;
use App\Http\Controllers\API\Lessons\GameController;
use App\Http\Controllers\API\Reward\RewardController;
use App\Http\Controllers\API\Auth\LocalAuthController;
use App\Http\Controllers\API\Lessons\LessonController;
use App\Http\Controllers\API\Auth\GlobalAuthController;
use App\Http\Controllers\API\Subscribe\SubscriptionController;

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

    Route::post('nameCheck', [AuthController::class, 'nameCheck']);
    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::get('userData', [AuthController::class, 'userData']);

    Route::prefix('local')->group(function () {

        Route::post('register', [LocalAuthController::class, 'Register']);
        Route::post('requestOTP', [LocalAuthController::class, 'Request_otp']);
        Route::post('submitOTP', [LocalAuthController::class, 'Submit_otp']);
    });

    Route::prefix('global')->group(function () {

        Route::post('register', [GlobalAuthController::class, 'Register']);
        Route::post('requestOTP', [GlobalAuthController::class, 'Request_otp']);
        Route::post('submitOTP', [GlobalAuthController::class, 'Submit_otp']);
    });
});

Route::prefix('points')->group(function () {
    Route::get('/{id}', [RewardController::class, 'getPoint']);
    Route::post('/', [RewardController::class, 'addPoint']);
});

Route::prefix('reward')->group(function () {
    Route::get('/', [RewardController::class, 'displayReward']);
    Route::get('/{id}', [RewardController::class, 'getReward']);
    Route::post('/', [RewardController::class, 'buyReward']);
});

Route::prefix('chat')->group(function () {
    Route::get('/', [ChatController::class, 'getChat']);
    Route::post('/', [ChatController::class, 'sendChat'])->middleware('delaySendMessage');
});



    Route::get('grades', [GameController::class, 'grades']);
    Route::get('lessons', [GameController::class, 'lessons']);
    Route::get('games', [GameController::class, 'games']);
    Route::get('game', [GameController::class, 'specificGame']);
    Route::get('end_match', [GameController::class,'end_match']);



Route::prefix('subscription')->group(function () {
    Route::get('plans',[SubscriptionController::class,'subscriptionPlans']);
    Route::post('purchase',[SubscriptionController::class,'purchaseSubscription']);
});

