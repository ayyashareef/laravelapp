<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);

Route::get('/about', function () {
    return view('about');
})->name('about');
