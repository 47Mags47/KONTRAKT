<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

// Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');
// });

