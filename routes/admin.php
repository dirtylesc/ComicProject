<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/', [UserController::class, 'index'])->name('index');
Route::group([
    'prefix' => 'users',
    'as' => 'users.',
], function () {
    Route::post('destroy/{id}', [UserController::class, 'destroy'])->name('destroy');
});

Route::group([
    'prefix' => 'comics',
    'as' => 'comics.',
], function () {
    Route::get('/', [ComicController::class, 'index'])->name('index');
});
