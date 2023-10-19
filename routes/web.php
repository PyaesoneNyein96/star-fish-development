<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/clear', function (){
    Artisan::call('cache:clear');
});
Route::get('/config', function (){
    Artisan::call('config:clear');
});
Route::get('/route', function (){
    Artisan::call('route:clear');
});

Route::get('/db1wipe', function (){
    Artisan::call('db:wipe --database=mysql');
});
Route::get('/db2wipe', function (){
    Artisan::call('db:wipe --database=mysql_2');
});

Route::get('/migrate', function (){
    Artisan::call('migrate ');
});


