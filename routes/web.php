<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::view('/', 'home')->name('home');

Route::view('/driver', 'application.main')->name('become.driver');
Route::view('/driver/application', 'application.signup')->name('driver.application.signup');
Route::view('/driver/application/verify-account', 'application.verify-account')->name('driver.application.verify');


Route::get('/login', function () {
    return view('home');
})->name('login');

Volt::route('driver/verification', 'application.verification.main')->name('application.verification');
