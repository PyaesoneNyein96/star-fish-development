<?php

use App\Http\Controllers\API\Dashboard\DashboardController;
use App\Http\Controllers\API\Lessons\GameController;
use App\Http\Controllers\API\Reward\RewardController;
use App\Http\Controllers\API\Subscribe\SubscriptionController;
use App\Http\Controllers\Dashboard\DashboardController as DashboardDashboardController;
use App\Http\Controllers\Dashboard\RewardController as DashboardRewardController;
use App\Http\Controllers\Dashboard\StudentController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('dashboard');
});




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware([
    'auth:sanctum',
    'verified',
])->group(function () {
    Route::prefix('/dashboard')->group(function () {
        Route::get('/', [DashboardDashboardController::class, "getDashboard"])->middleware(['auth', 'verified'])->name('dashboard');

        // students
        // Route::get('/students', [StudentController::class, 'getAllStudents'])->name('students');
        Route::post('/student/update', [StudentController::class, 'updateStudent']);
        Route::get('/student/delete/{id}', [StudentController::class, 'toDeleteCompo']);
        Route::delete('/student/delete/{id}', [StudentController::class, 'removeStudent']);
        Route::patch('/student/logout/{id}', [StudentController::class, 'logoutStudent']);

        // rewards
        Route::get('/rewards', [DashboardRewardController::class, 'getAllRewards'])->name('reward');
        Route::post('/rewards/per/add', [DashboardRewardController::class, 'addPerReward']);
        Route::post('/rewards/per/edit', [DashboardRewardController::class, 'editPerReward']);
        Route::delete('/rewards/per/delete/{id}', [DashboardRewardController::class, 'deletePerReward']);
        Route::post('/rewards/rename', [DashboardRewardController::class, 'renameReward']);
        Route::delete('/rewards/remove/{name}', [DashboardRewardController::class, 'removeReward']);

        // // Admin
        // Route::get('/profile', [AdminProfileController::class, 'profile'])->name('adminProfile');

        // Route::get('/student/profilepic/remove/{id}', [StudentController::class, 'profilePicRemove']);

        // Route::post('/rewards', [DashboardController::class, 'addReward']);

        // // chats
        // Route::get('/chats', [DashboardController::class, 'chat']);
        // Route::get('/axios/chats', [DashboardController::class, 'axiosChat']);
    });
});












/////////////////////// Payment Integration /////////////////////////

Route::prefix('payment')->group(function () {
    Route::post('/notify', [SubscriptionController::class, 'notify']);
    Route::get('/kpay/referer', [SubscriptionController::class, 'referer']);
    Route::get('/kpay/result', [SubscriptionController::class, 'return_url']);
});



Route::get('/test', function () {
    return view('testing');
});

Route::get('/mails', function () {
    return view('Emails.mail-tp');
});

Route::get('/cache', function () {
    Artisan::call('cache:clear');
    return back();
});

Route::get('/config', function () {
    Artisan::call('config:clear');
    return back();
});

Route::get('/configCache', function () {
    Artisan::call('config:cache');
    return back();
});
Route::get('/route', function () {
    Artisan::call('route:clear');
    return back();
});

Route::get('/dbWipe', function () {
    Artisan::call('db:wipe');
    return back();
});


Route::get('/migrate', function () {
    Artisan::call('migrate');
    return back();
});

Route::get('/fresh', function () {
    Artisan::call('migrate:fresh');
    return back();
});

Route::get('/seed', function () {
    Artisan::call('db:seed');
    return back();
});

Route::get('/lock', [GameController::class, 'lockAndUnlock']);

Route::get('/link', function () {
    Artisan::call('storage:link');
    return back();
});


require __DIR__ . '/auth.php';
