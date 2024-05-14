<?php

use App\Http\Controllers\API\Assessment\AssessmentController;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\API\Lessons\GameController;
use App\Http\Controllers\Dashboard\RewardController;
use App\Http\Controllers\Dashboard\StudentController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\AdminProfileController;
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




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::prefix('/dashboard')->middleware(['auth:sanctum', 'verified',])->group(function () {

    Route::get('/', [DashboardController::class, "getDashboard"])->middleware('auth')->name('dashboard');

    // students
    // Route::get('/students', [StudentController::class, 'getAllStudents'])->name('students');
    Route::post('/student/update', [StudentController::class, 'updateStudent']);
    Route::get('/student/delete/{id}', [StudentController::class, 'toDeleteCompo']);
    Route::delete('/student/delete/{id}', [StudentController::class, 'removeStudent']);
    Route::patch('/student/logout/{id}', [StudentController::class, 'logoutStudent']);

    // rewards
    Route::get('/rewards', [RewardController::class, 'getAllRewards'])->name('reward');
    Route::post('/rewards/per/add', [RewardController::class, 'addPerReward']);
    Route::post('/rewards/per/edit', [RewardController::class, 'editPerReward']);
    Route::delete('/rewards/per/delete/{id}', [RewardController::class, 'deletePerReward']);
    Route::post('/rewards/rename', [RewardController::class, 'renameReward']);
    Route::delete('/rewards/remove/{name}', [RewardController::class, 'removeReward']);

    // Admin
    Route::get('/profile', [AdminProfileController::class, 'profile'])->name('adminProfile');


    // Route::post('/rewards', [DashboardController::class, 'addReward']);

    // // chats
    // Route::get('/chats', [DashboardController::class, 'chat']);
    // Route::get('/axios/chats', [DashboardController::class, 'axiosChat']);
});



// Certificate
Route::get('/certificate', [AssessmentController::class, 'makeCertificate'])->name('certificate');
Route::get('/testing', [AssessmentController::class, 'maketest'])->name('testing');



/////////////////////// Payment Integration /////////////////////////

Route::prefix('payment')->group(function () {
    Route::post('/notify', [SubscriptionController::class, 'notify']);
    Route::get('/kpay/referer', [SubscriptionController::class, 'referer']);
    Route::get('/kpay/result', [SubscriptionController::class, 'return_url']);
});

Route::get('/certi', function () {
    return view('certificate');
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
