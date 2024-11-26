<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/profile', function () {
    return 'profile';
})->name('profile');
