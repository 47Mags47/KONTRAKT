<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MakerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view(view: 'index');
})->name('home');

// Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');
// });

// Route::middleware('auth')->group(function () {
    Route::get('/maker', [MakerController::class, 'index'])->name('maker.index');
    Route::get('/maker/create', [MakerController::class, 'create'])->name('maker.create');
    Route::post('/maker/store', [MakerController::class, 'store'])->name('maker.store');
    Route::get('/maker/{maker}/show', [MakerController::class, 'show'])->name('maker.show');

    Route::get('/maker/{maker}/item/create', [ItemController::class, 'create'])->name('item.create');
    Route::post('/maker/{maker}/item/store', [ItemController::class, 'store'])->name('item.store');
    Route::get('/maker/{maker}/item/{item}/edit', [ItemController::class, 'edit'])->name('item.edit');
    Route::put('/maker/{maker}/item/{item}update', [ItemController::class, 'update'])->name('item.update');
// });
