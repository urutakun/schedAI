<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
});

// REGISTER

Route::prefix('auth')->group(function(){
  Route::get('/register', [RegisterController::class, 'index'])->name('register');
});

// SESSION
Route::prefix('auth')->group(function(){
  Route::get('/login', [SessionController::class, 'index'])->name('login');
  Route::post('/login', [SessionController::class, 'store']);
  Route::post('/logout', [SessionController::class, 'destroy']);
});

// ADMIN
Route::prefix('admin')->group(function(){
  Route::get('/dashboard', [AdminController::class, 'index']);
  Route::get('/dashboard/test', [AdminController::class, 'create']);
});
