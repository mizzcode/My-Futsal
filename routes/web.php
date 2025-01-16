<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/venue', function () {
    return view('venue');
})->name('venue');

Route::group(['prefix' => 'auth'], function () {
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('postRegister');
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('postLogin');
});

Route::get('/verify-register', [AuthController::class, 'showVerifyRegister'])->name('verifyRegister');
Route::post('/verify-code', [AuthController::class, 'verifyCode'])->name('verify-code');