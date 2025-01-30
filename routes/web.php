<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\Web\MakerController;
use App\Http\Controllers\Web\AdminController;
use App\Http\Controllers\Web\ItemController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'index'])->name('home');

Route::prefix('/dev')->group(function () {
    Route::get('/welcome', function () {
        return view('pages.dev.welcome');
    })->name('welcome');
    Route::get('/palette', function () {
        return view('pages.dev.palette');
    })->name('palette');
    Route::get('/components', function () {
        return view('pages.dev.components');
    })->name('components');
});

Route::prefix('/admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});

Route::prefix('/makers')->group(function () {
    Route::get('/{maker}/show', [MakerController::class, 'show'])->name('maker.show');
    Route::middleware('web')->group(function(){
        Route::get('/create', [MakerController::class, 'create'])->name('maker.create');
        Route::post('/store', [MakerController::class, 'store'])->name('maker.store');
        Route::prefix('/{maker}')->group(function () {
            Route::get('/edit', [MakerController::class, 'edit'])->name('maker.edit');
            Route::put('/update', [MakerController::class, 'update'])->name('maker.update');
            Route::delete('/destroy', [MakerController::class, 'destroy'])->name('maker.destroy');
        });
    });
});

Route::prefix('/makers/{maker}/items')->group(function () {
    Route::get('/{item}/show', [ItemController::class, 'show'])->name('item.show');
    Route::middleware('web')->group(function(){
        Route::get('/create/{type?}', [ItemController::class, 'create'])->name('item.create');
        Route::post('/store', [ItemController::class, 'store'])->name('item.store');
        Route::prefix('/{item}')->group(function () {
            Route::get('/edit', [ItemController::class, 'editProduct'])->name('item.edit');
            Route::put('/update', [ItemController::class, 'update'])->name('item.update');
            Route::delete('/destroy', [ItemController::class, 'destroy'])->name('item.destroy');
        });
    });
});
