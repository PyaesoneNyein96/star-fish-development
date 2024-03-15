<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\API\Dashboard\DashboardController;
use App\Http\Controllers\API\Subscribe\SubscriptionController;

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

Route::middleware([
    'auth:sanctum',
    'verified',
])->group(function () {
    Route::prefix('/dashboard')->group(function () {
        Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');

        // profile
        Route::get('/profile', [DashboardController::class, 'profile'])->name('profile');

        // students
        Route::get('/students', [DashboardController::class, 'students'])->name('students');
        Route::post('/student/edit', [DashboardController::class, 'postEditStudent']);
        Route::get('/student/remove/{id}', [DashboardController::class, 'removeStudent']);
        Route::get('/student/profilepic/remove/{id}', [DashboardController::class, 'profilePicRemove']);

        // rewards
        Route::get('/rewards', [DashboardController::class, 'rewards'])->name('reward');
        Route::post('/rewards', [DashboardController::class, 'addReward']);
        Route::get('/rewards/remove/{name}', [DashboardController::class, 'removeReward']);
        Route::post('/rewards/rename', [DashboardController::class, 'renameReward']);
        Route::post('/rewards/per/add', [DashboardController::class, 'addPerReward']);
        Route::post('/rewards/per/edit', [DashboardController::class, 'editPerReward']);
        Route::post('/rewards/per/delete', [DashboardController::class, 'deletePerReward']);

        // chats
        Route::get('/chats', [DashboardController::class, 'chat']);
        Route::get('/axios/chats', [DashboardController::class, 'axiosChat']);
    });
});


/////////////////////// Payment Integration /////////////////////////

Route::prefix('payment')->group(function () {
    Route::post('/notify', [SubscriptionController::class, 'notify']);
    // Route::post('/kpay/referer', [SubscriptionController::class, 'referer']);
    Route::get('/kpay/referer', [SubscriptionController::class, 'referer']);
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

Route::get('/link', function () {
    Artisan::call('storage:link');
    return back();
});
