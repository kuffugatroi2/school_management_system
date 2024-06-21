<?php

use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\DashboardController;
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

/*---------------------------------------------------BACKEND---------------------------------------------------*/

Route::get('admin/login', [AuthController::class, 'index'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('auth.login');
Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');

/*---------------------------------------------------ADMIN---------------------------------------------------*/

Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    });
});
