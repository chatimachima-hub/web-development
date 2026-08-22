<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');

    Route::get('user', [\App\Http\Controllers\UserController::class, 'index'])->name('user');
    Route::get('user/create', [\App\Http\Controllers\UserController::class, 'create'])->name('user.create');
    Route::post('user/store', [\App\Http\Controllers\UserController::class, 'store'])->name('user.store');
    Route::get('user/{user}/edit', [\App\Http\Controllers\UserController::class, 'edit'])->name('user.edit');
    Route::put('user/{user}', [\App\Http\Controllers\UserController::class,'update'])->name('user.update');
    Route::delete('user/{user}', [\App\Http\Controllers\UserController::class,'destroy'])->name('user.destroy');
});


require __DIR__ . '/settings.php';
