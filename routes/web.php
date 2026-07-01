<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// Feed
Route::get('/feed', [PostController::class, 'index'])->name('feed');

// Register
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');

// Login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::post('/posts', [PostController::class, 'store'])->name('posts.store');


Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');