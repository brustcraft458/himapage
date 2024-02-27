<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserHomeController;
use App\Http\Controllers\UserDepatermenController;
use App\Http\Controllers\TestController;

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

Route::resource('/', UserHomeController::class);
Route::resource('/depatermen/{nama}', UserDepatermenController::class);
