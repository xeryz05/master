<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController; //controller untuk dashboard admin
use App\Http\Controllers\SwitherController; //controller untuk dashboard switcher
use App\Http\Controllers\ProfileController; //controller untuk profile
use App\Http\Controllers\Admin\UserController; //controller untuk admin crud user
use App\Http\Controllers\Admin\DepartementController; //controller untuk admin crud departement
use App\Http\Controllers\Admin\CompanyController; //controller untuk admin crud company
use App\Http\Controllers\Admin\RoleController; //controller untuk admin crud role
use App\Http\Controllers\Admin\PeriodController; //controller untuk admin crud periode
use App\Http\Controllers\Admin\RevenueVIController; //controller untuk admin crud revenue VI
use App\Http\Controllers\Admin\VerevenueController; //controller untuk admin crud revenue VE
use App\Http\Controllers\Admin\PAController; //controller untuk admin crud PA VI
use App\Http\Controllers\Admin\TypeJobController; //controller untuk admin crud type job VI|VE
use App\Http\Controllers\Internal\DashboardUserController; //controller untuk dashboard VI
use App\Http\Controllers\Internal\DashboardUserVEController; //controller untuk dashboard VE
use App\Http\Controllers\Internal\DashboardRevenueController; //controller untuk revenue VI
// use App\Http\Controllers\Internal\DashboardRevenueVEController; //controller untuk revenue VE


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
    return view('login');
});

Route::get('login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->middleware(['guest','throttle:login']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/user', [DashboardController::class, 'index'])->name('index')->middleware(['auth']);
Route::get('/switcher', [SwitherController::class, 'index'])->middleware('auth','isAdmin');
Route::get('/profile', [ProfileController::class, 'index'])->middleware('auth');

Route::resource('/users', UserController::class)->middleware(['auth','isAdmin']);
Route::resource('/departements', DepartementController::class)->middleware(['auth','isAdmin']);
Route::resource('/companies', CompanyController::class)->middleware(['auth','isAdmin']);
Route::resource('/roles', RoleController::class)->except(['create','store','show','destroy'])->middleware(['auth','isAdmin']);
Route::resource('/periods', PeriodController::class)->middleware(['auth','isAdmin']);
Route::resource('/PA', PAController::class)->middleware('auth','isAdmin');
Route::resource('/type_jobs', TypeJobController::class)->middleware(['auth','isAdmin']);

Route::get('/revenue/export', [RevenueVIController::class, 'export'])->name('revenue.export');
Route::post('/revenue/import', [RevenueVIController::class, 'import'])->name('revenue.import');
Route::resource('/revenue_verdanco_indonesia', RevenueVIController::class)->middleware(['auth','isAdmin']);
Route::get('/dashboardVI/grafik', [DashboardUserController::class, 'grafik']);
Route::resource('/dashboardVI', DashboardUserController::class)->middleware('auth'); //route ke dashboard Verdanco Indonesia
Route::get('/revenueVI', [DashboardUserController::class, 'jobchartVI'])->middleware('auth');

Route::get('/revenueVE', [DashboardUserVEController::class, 'jobchart'])->middleware('auth');
Route::get('/dashboardVE/grafik', [DashboardUserVEController::class, 'grafik'])->middleware('auth');
Route::resource('/dashboardVE', DashboardUserVEController::class)->middleware('auth');
Route::resource('/revenue_verdanco_engineering', VerevenueController::class)->middleware(['auth','isAdmin']);