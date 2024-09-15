<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Admin\DashboardController;
use App\Http\Controllers\Backend\Admin\AdminManagement\AdminController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Backend\Admin\Auth\LoginController as AdminLoginController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


// Admin Login Routes
Route::controller(AdminLoginController::class)->prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', 'adminLogin')->name('login');
    Route::post('/login', 'adminLoginCheck')->name('login');
    Route::post('/logout', 'logout')->name('logout');
});

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {

    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');

    // Admin Management Routes
    Route::group(['as' => 'am.', 'prefix' => 'admin-management'], function () {
        Route::resource('admin', AdminController::class);
        // Add other admin management routes here
    });

});