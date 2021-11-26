<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/register', function () {
    return view('register');
})->name('register');
 
// Route::post('/register', 'RegisterController@index')->name('reg-form');
Route::post('/register', [RegisterController::class, 'index'])->name('reg-form');

Route::get('/login', function () {
    return view('login');
})->name('log-in');