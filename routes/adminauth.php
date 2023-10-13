<?php

use App\Http\Controllers\admin\adminAuth\AdminLoginController;
use App\Http\Controllers\admin\adminAuth\AdminRegisterController;
use App\Http\Controllers\admin\DashboardController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function(){
    /* ------- admin login -------*/
    Route::get('/login', [AdminLoginController::class, 'Index'])->name('admin.login');
    Route::post('/login/owner', [AdminLoginController::class, 'Login'])->name('admin.loggeding');

    Route::get('/logout', [AdminLoginController::class, 'AdminLogout'])->name('admin.logout')->middleware('admin');
    /* ------- end admin login -------*/

     /* ------- admin register -------*/
     Route::get('/register', [AdminRegisterController::class, 'Index'])->name('admin.register');
     Route::post('/registered', [AdminRegisterController::class, 'Register'])->name('admin.registered');
      /* ------- end admin register -------*/

     /* ------- admin Dashboard -------*/
     Route::get('/dashboard', [DashboardController::class, 'Index'])->name('admin.dashboard')->middleware('admin');
      /* ------- end admin Dashboard -------*/

});