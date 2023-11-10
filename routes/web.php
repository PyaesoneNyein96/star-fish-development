<?php

use App\Http\Controllers\API\Dashboard\DashboardController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\WorkshopController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/test', function () {

    return view('testing');
});

Route::get('/mails', function () {
    return view('Emails.mail-tp');
});



Route::get('/', function () {
    return view('testing');
});

Route::get('/cache', function () {
    Artisan::call('cache:clear');
    return back();
});

Route::get('/config', function () {
    Artisan::call('config:clear');
    return back();
});

Route::get('/configcache', function () {
    Artisan::call('config:cache');
    return back();
});
Route::get('/route', function () {
    Artisan::call('route:clear');
    return back();
});

Route::get('/dbwipe', function () {
    Artisan::call('db:wipe');
    return back();
});

Route::get('/fresh', function () {
    Artisan::call('migrate:fresh --seed');
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


Route::get('gameAudio', [WorkshopController::class, 'gameAudio']);

Route::get('/dashboard/index', [DashboardController::class, 'dashboard']);
Route::get('/dashboard/students', [DashboardController::class, 'students']);
Route::get('/dashboard/rewards', [DashboardController::class, 'rewards']);
Route::get('/dashboard/chat', [DashboardController::class, 'chat']);

Route::post('/dashboard/student/edit', [DashboardController::class, 'postEditData']);
