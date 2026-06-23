<?php

use Illuminate\Support\Facades\Route;

Route::get('/feed', function () {
    return view('feed');
});
