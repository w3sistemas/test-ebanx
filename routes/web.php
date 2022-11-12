<?php

use App\Http\Controllers\Api\V1\BalanceController;
use App\Http\Controllers\Api\V1\EventController;
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

Route::resource('balance', BalanceController::class)->only([
    'index'
]);

Route::resource('event', EventController::class)->only([
    'store'
]);
