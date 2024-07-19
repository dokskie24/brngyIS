<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\DashboardController;


Route::get('/', function () {
    return view('layouts/login');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
