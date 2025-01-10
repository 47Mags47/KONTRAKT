<?php

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
        // Route::get('/index', [MakerController::class, 'index'])->name('admin.maker.index');
        Route::get('/create', [MakerController::class, 'create'])->name('admin.maker.create');
        // Route::get('/store', [MakerController::class, 'store'])->name('admin.maker.store');
        // Route::get('/show', [MakerController::class, 'show'])->name('admin.maker.show');
        // Route::get('/edit', [MakerController::class, 'edit'])->name('admin.maker.edit');
        // Route::get('/update', [MakerController::class, 'update'])->name('admin.maker.update');
        // Route::get('/destroy', [MakerController::class, 'index'])->name('admin.maker.destroy');
    });
});
