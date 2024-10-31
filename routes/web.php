<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});




Route::prefix('user')->group(function () {
    Route::get('/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/store', [UserController::class, 'store'])->name('user.store');
    Route::get('/list', [UserController::class, 'index'])->name('user.list');
    Route::get('/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::post('/update/{id}', [UserController::class, 'update'])->name('user.update');
    Route::get('/delete/{id}', [UserController::class, 'delete'])->name('user.delete');
    Route::get('/profile/{id}', [UserController::class, 'profile'])->name('user.profile');
});





