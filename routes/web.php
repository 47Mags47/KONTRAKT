<?php

use App\Http\Controllers\Web\Admin\MakerController;
use App\Http\Controllers\Web\Admin\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.dev.welcome');
})->name('welcome');

Route::get('/components', function () {
    return view('pages.dev.components');
});

Route::get('/palette', function () {
    return view('pages.dev.palette');
});

Route::prefix('/makers')->group(function(){
    Route::get('/index', [MakerController::class, 'index'])->name('maker.index');
});

Route::prefix('/admin')->group(function(){
    Route::prefix('/makers')->group(function(){
        Route::get('/create', [MakerController::class, 'create'])->name('admin.maker.create');
        Route::post('/store', [MakerController::class, 'store'])->name('admin.maker.store');
        Route::prefix('/{maker}')->group(function(){
            Route::get('/show', [MakerController::class, 'show'])->name('admin.maker.show');
        });
    });

    Route::prefix('/products')->group(function(){
        Route::get('/makers/{maker}/create', [ProductController::class, 'create'])->name('admin.product.create');
        Route::post('/makers/{maker}/store', [ProductController::class, 'store'])->name('admin.product.store');
        Route::prefix('/{product}')->group(function(){
            Route::get('/show', [ProductController::class, 'show'])->name('admin.product.show');
        });
    });

});
