<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MakerController;
use Illuminate\Support\Facades\Route;

// Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');
// });

// Route::middleware('auth')->group(function () {
    Route::get('/maker/index', [MakerController::class, 'index'])->name('maker.index');
    Route::get('/maker/create', [MakerController::class, 'create'])->name('maker.create');
    Route::post('/maker/store', [MakerController::class, 'store'])->name('maker.store');
    Route::get('/maker/{maker}/show', [MakerController::class, 'show'])->name('maker.show');
// });
