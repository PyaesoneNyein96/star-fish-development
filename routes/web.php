<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

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

Route::get('/', function () {
    return "hello darkness my old friend";
});

Route::get('/cache', function (){
    Artisan::call('cache:clear');
    return back();
});

Route::get('/config', function (){
    Artisan::call('config:clear');
    return back();
});

Route::get('/configcache', function (){
    Artisan::call('config:cache');
    return back();
});
Route::get('/route', function (){
    Artisan::call('route:clear');
    return back();
});

Route::get('/dbwipe', function (){
    Artisan::call('db:wipe');
    return back();
});

Route::get('/fresh', function (){
    Artisan::call('migrate:fresh');
    return back();
});

Route::get('/migrate', function (){
    Artisan::call('migrate');
    return back();
});

Route::get('/fresh', function (){
    Artisan::call('migrate:fresh');
    return back();
});

Route::get('/seed', function (){
    Artisan::call('db:seed');
    return back();
});


