<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/welcome', function () {
    return view('welcome'); // Mengarahkan ke halaman welcome.blade.php
});

Route::get('/login', function () {
    return view('login'); // Mengarahkan ke halaman login.blade.php
});

Route::get('/home', function () {
    return view('home'); // Mengarahkan ke halaman home.blade.php
});

Route::get('/register', function () {
    return view('register'); // Mengarahkan ke halaman register.blade.php
});
