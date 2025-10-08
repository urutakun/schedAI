<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// HOME

Route::get('/', function () {
    return Inertia::render('Landing');
});

// ABOUT
Route::get('/about', function () {
    return Inertia::render('About');
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
  Route::get('/departments', [DepartmentController::class, 'index'])->name('departments.index');
  Route::get('/departments/create', [DepartmentController::class, 'create']);
  Route::post('/departments/create', [DepartmentController::class, 'store']);
  Route::get('/instructors', [InstructorController::class, 'index']);
  Route::get('/instructors/create', [InstructorController::class, 'create']);
  Route::get('/courses', [CourseController::class, 'index']);
  Route::get('/courses/create', [CourseController::class, 'create']);
});
