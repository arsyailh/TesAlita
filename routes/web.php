<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\DashboardController;

Route::get('/employees', [EmployeeController::class, 'index']);
Route::resource('locations', LocationController::class);
Route::resource('employees', EmployeeController::class);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard/filter', [DashboardController::class, 'filter'])->name('dashboard.filter');
