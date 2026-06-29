<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


//Route::get('/feed', function () {
    //return view('feed');
//});

Route::get('/feed',[PostController::class,'index'])
->name('feed');
