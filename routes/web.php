<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//start Dashboard area
Route::get('/index', [App\Http\Controllers\DashboardController::class, 'index'])->name('index');
Route::get('/about', [App\Http\Controllers\DashboardController::class, 'about'])->name('about');
Route::get('/bestdeal', [App\Http\Controllers\DashboardController::class, 'bestdeal'])->name('bestdeal'); 


//end
