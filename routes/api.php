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
use App\Http\Controllers\API\Assessment\AssessmentController;
use App\Http\Controllers\API\Subscribe\SubscriptionController;
use App\Http\Controllers\API\Version\VersionAndUpdateController;

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

    // Local
    Route::prefix('local')->group(function () {

        Route::post('register', [LocalAuthController::class, 'Register']);
        Route::post('requestOTP', [LocalAuthController::class, 'Request_otp']);
        Route::post('submitOTP', [LocalAuthController::class, 'Submit_otp']);
    });

    // Global
    Route::prefix('global')->group(function () {

        Route::post('register', [GlobalAuthController::class, 'Register']);
        Route::post('requestOTP', [GlobalAuthController::class, 'Request_otp']);
        Route::post('submitOTP', [GlobalAuthController::class, 'Submit_otp']);
    });

    //Auth (Both)
    Route::post('nameCheck', [AuthController::class, 'nameCheck']);
    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::get('userData', [AuthController::class, 'userData']);
    // Route::get('userData', [VersionAndUpdateController::class, 'userDataAndroid'])->middleware('StudentExist');
    // Route::get('userData/ios', [VersionAndUpdateController::class, 'userDataIOS'])->middleware('StudentExist');


    //Account Setting
    Route::middleware('StudentExist')->prefix('account')->group(function () {
        Route::post('/forgot/confirmation',[AuthController::class,'sendConfirmCode']);
        Route::post('/forgot/submit',[AuthController::class,'submitConfirmCode']);
        Route::post('/setPassword',[AuthController::class,'setNewPassword']);
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
        Route::post('/nick', [ChatController::class, 'changeNName'])->middleware('canChat');
        Route::post('/', [ChatController::class, 'sendChat'])->middleware('delaySendMessage');
    });


    Route::middleware('GameAuth')->group(function () {
        Route::get('grades', [GameController::class, 'grades']);
        Route::get('lessons', [GameController::class, 'lessons']);
        Route::get('units', [GameController::class, 'games']);
        Route::get('game', [GameController::class, 'specificGame']);
        Route::get('end_match', [GameController::class, 'end_match']);
    });



    Route::prefix('control')->group(function () {
        Route::post('/', [GameController::class, 'lockAndUnlock']);
        Route::post('/check', [GameController::class, 'showLockAndUnlock']);
        Route::post('/lesson', [GameController::class, 'LessonLock']);
    });


    Route::prefix('subscription')->group(function () {

        Route::get('plans', [SubscriptionController::class, 'plans']);
        Route::post('purchase', [SubscriptionController::class, 'purchase']);
        Route::post('removePlan', [SubscriptionController::class, 'removePlan']);

        // Route::post('signature_algorithm', [SubscriptionController::class, 'algorithm']);
        Route::post('notify', [SubscriptionController::class, 'notify']);

    });


    Route::prefix('assessment')->group(function () {
        Route::get('/', [AssessmentController::class, 'getAllAssess']);
        Route::get('game', [AssessmentController::class, 'enterGame']);
        Route::get('end_match', [AssessmentController::class, 'endGame']);
    });



    // ===============================
    // ============ test =============
    // ===============================
    Route::get('/test', [GameController::class, 'test']);


    // Route::middleware(['auth', 'second'])->prefix('setting')->group(function () {
    //     Route::post('/email',[AuthController::class,'request_email']);
    // });



    // ============== Versions ================


    // Route::prefix('version')->middleware('StudentExist')->group(function () {

    //     Route::get('');


    // });
