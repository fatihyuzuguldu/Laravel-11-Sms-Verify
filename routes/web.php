<?php
// routes/web.php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\VerifyController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
// Register Routes
Route::middleware('guest')->group(function () {

});

// Login Routes
Route::middleware('guest')->group(function () {
    Route::get('Auth/Login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('Auth/Login', [LoginController::class, 'login']);
    Route::get('Auth/Register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('Auth/Register', [RegisterController::class, 'register']);
    Route::get('Auth/Verify', [VerifyController::class, 'showVerifyForm'])->name('verify');
    Route::post('Auth/Verify', [VerifyController::class, 'verify']);
});

// Dashboard Route
Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Logout Route
Route::post('logout', [VerifyController::class, 'logout'])->name('logout');
