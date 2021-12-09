<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/register', function () {
    return view('register');
})->name('register');


Route::post('/register/submit', [RegisterController::class, 'register'])->name('reg-form');
Route::get('/register/all', [RegisterController::class, 'allData'])->name('reg-data');

Route::get('/login', function () {
    return view('login');
})->name('log-in');