<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Auth\AuthController;
use App\Http\Controllers\API\Chat\ChatController;
use App\Http\Controllers\API\Lessons\GameController;
use App\Http\Controllers\API\Reward\RewardController;
use App\Http\Controllers\API\Auth\LocalAuthController;
use App\Http\Controllers\API\Lessons\LessonController;
use App\Http\Controllers\API\Auth\GlobalAuthController;
use App\Http\Controllers\API\Mission\MissionController;
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
Route::get('/banners', [AuthController::class, 'getBanners']);


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
    Route::get('versionCheck/android', [VersionAndUpdateController::class, 'AndroidVersionCheck']);
    Route::get('versionCheck/ios', [VersionAndUpdateController::class, 'IosVersionCheck']);

    Route::post('version/add', [VersionAndUpdateController::class, 'addVersion']);


    //Account Setting
    Route::middleware('StudentExist')->prefix('account')->group(function () {
        Route::post('/forgot/confirmation', [AuthController::class, 'sendConfirmCode']);
        Route::post('/forgot/submit', [AuthController::class, 'submitConfirmCode']);
        Route::post('/setPassword', [AuthController::class, 'setNewPassword']);
    });
});



Route::prefix('points')->group(function () {
    Route::get('/{id}', [RewardController::class, 'getPoint']);
    Route::post('/', [RewardController::class, 'addPoint'])->name('addPoint');
});

Route::prefix('reward')->group(function () {
    Route::get('/all', [RewardController::class, 'displayAllReward']);
    Route::get('/each', [RewardController::class, 'displayEachReward']);
    Route::get('/profiles', [RewardController::class, 'displayEachProfile']);
    Route::get('/', [RewardController::class, 'getReward']);
    Route::post('/', [RewardController::class, 'buyReward']);
});

Route::post('/profile/update', [RewardController::class, "updateProfile"]);

Route::prefix('chat')->group(function () {
    Route::get('/', [ChatController::class, 'getChat']);
    Route::post('/nick', [ChatController::class, 'changeNName'])->middleware('canChat');
    Route::post('/', [ChatController::class, 'sendChat'])->middleware('delaySendMessage');
});

// Games (grade, lesson, unit, game)
Route::middleware('GameAuth')->group(function () {
    Route::get('grades', [GameController::class, 'grades']);
    Route::get('lessons', [GameController::class, 'lessons']);
    Route::get('units', [GameController::class, 'games']);
    Route::get('game', [GameController::class, 'specificGame']);
    Route::get('end_match', [GameController::class, 'end_match']);
});


// Game Control
Route::prefix('control')->group(function () {
    Route::post('/', [GameController::class, 'lockAndUnlock']);
    Route::post('/check', [GameController::class, 'showLockAndUnlock']);
    Route::post('/lesson', [GameController::class, 'LessonLock']);
    Route::post('/category', [GameController::class, 'CategoryLock']);
});

// Subscription plans
Route::prefix('subscription')->group(function () {
    Route::get('plans', [SubscriptionController::class, 'plans']);
    Route::post('removePlan', [SubscriptionController::class, 'removePlan']);
});

// Payment
Route::prefix('payment')->group(function () {
    Route::post('request_prepay_id', [SubscriptionController::class, 'getPrepay_id']);
    Route::post('check/result', [SubscriptionController::class, 'checkPaymentResult']);
});


Route::prefix('assessment')->group(function () {
    Route::get('/', [AssessmentController::class, 'getAllAssess']);
    Route::get('game', [AssessmentController::class, 'enterGame']);
    Route::get('each/game', [AssessmentController::class, 'recordEachGame']);
    Route::get('end_match', [AssessmentController::class, 'endGame']);
    Route::get('/certificate/{id}/{percentage}/{stu}', [AssessmentController::class, 'makeCertificate'])->name('certificate');
});

// Route::get('/testing', [AssessmentController::class, 'maketest'])->name('testing');

///////////////// Mission //////////////////////

Route::prefix('mission')->middleware('isSubscriber')->group(function () {

    Route::prefix('repetitive')->group(function () {
        // Route::get('/game-list',[MissionController::class,'repetitiveGameList']);

        Route::get('/lesson-list', [MissionController::class, 'repetitiveLessonList']);
        Route::get('/claim_lesson', [MissionController::class, 'repetitiveClaimLesson']);
    });

    Route::prefix('assessment')->group(function () {
        Route::get("/assess-list", [MissionController::class, 'assessmentList']);
        Route::get("/claim_lesson", [MissionController::class, 'assessmentClaim']);
    });

    Route::prefix('daily')->group(function () {
        Route::get('check', [MissionController::class, 'dailyBonusCheck']);
        Route::get('bonus', [MissionController::class, 'dailyBonusList']);
        Route::get('claim', [MissionController::class, 'dailyBonusClaim']);
    });

    Route::prefix('login')->group(function () {
        Route::get('check', [MissionController::class, 'checkLogin']);
        Route::get('bonus', [MissionController::class, 'loginBonusList']);
        Route::get('claim', [MissionController::class, 'loginBonusClaim']);
    });

    Route::prefix('question')->group(function () {
        Route::get('bonus', [MissionController::class,'questionBonusList']);
        Route::get('claim', [MissionController::class,'questionBonusClaim']);
    });
});



// ===============================
// ============ test =============
// ===============================
Route::get('/test', [GameController::class, 'test']);
