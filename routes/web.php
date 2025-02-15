<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);

Route::get('/about', function () {
    return view('about');
})->name('about');

// Comment out or remove these lines if they exist
// Route::get('/login', ...);
// Route::get('/register', ...);
