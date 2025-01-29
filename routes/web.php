<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VenueController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/venue', [VenueController::class, 'index'])->name('venue');

Route::get('/v/{slug}', [VenueController::class, 'detail'])->name('venue.detail');

Route::group(['prefix' => 'auth'], function () {
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('postRegister');
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('postLogin');
});

Route::get('/verify-register', [AuthController::class, 'showVerifyRegister'])->name('verifyRegister');
Route::post('/verify-code', [AuthController::class, 'verifyCode'])->name('verify-code');