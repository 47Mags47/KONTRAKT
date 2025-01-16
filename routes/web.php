<?php

use App\Http\Controllers\Web\Admin\ItemController;
use App\Http\Controllers\Web\Admin\MakerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.dev.welcome');
});

Route::get('/components', function () {
    return view('pages.dev.components');
});

Route::get('/palette', function () {
    return view('pages.dev.palette');
});

Route::prefix('/admin')->group(function(){
    Route::prefix('/maker')->group(function(){
        Route::get('/create', [MakerController::class, 'create'])->name('admin.maker.create');
        Route::post('/store', [MakerController::class, 'store'])->name('admin.maker.store');
        Route::prefix('/{maker}')->group(function(){
            Route::get('/show', [MakerController::class, 'show'])->name('admin.maker.show');
        });
    });
});
