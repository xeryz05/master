<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Internal\DashboardUserController;
use App\Http\Controllers\Internal\DashboardRevenueController;
use App\Http\Controllers\Internal\DashboardRevenueVEController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/revenues/data', [DashboardRevenueController::class, 'revData']);
Route::get('/revenuesVE/data', [DashboardRevenueVEController::class, 'revDataVE']);
