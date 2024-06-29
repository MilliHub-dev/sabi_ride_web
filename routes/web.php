<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::view('/', 'home')->name('home');

Route::view('/driver', 'verifications.main')->name('become.driver');
Route::view('/driver/application', 'verifications.application')->name('driver.application');
Route::view('/driver/application/verify-account', 'verifications.verify-account')->name('driver.application.verify');


Route::get('/login', function () {
    return view('home');
})->name('login');

Volt::route('driver/verification', 'application.verification.main');
