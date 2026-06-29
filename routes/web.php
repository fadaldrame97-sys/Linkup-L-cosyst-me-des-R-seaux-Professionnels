<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


//Route::get('/feed', function () {
    //return view('feed');
//});

Route::get('/feed',[PostController::class,'index'])
->name('feed');

Route::get('/register',[AuthController::class,'showRegisterForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/login',[AuthController::class,'showLoginForm'])->name('login.form');