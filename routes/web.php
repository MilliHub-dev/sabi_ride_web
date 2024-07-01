<?php

use Livewire\Volt\Volt;


Volt::route('signup', 'home.signup')->name('signup');
Volt::route('driver', 'home.driver')->name('driver');
Volt::route('/', 'home.index')->name('home');
Volt::route('driver/verification', 'verification.main')->name('verification.start');
Volt::route('driver/login', 'auth.login')->name('login');
Volt::route('/driver/verify-account', 'auth.verify')->name('verify.account');
Volt::route('/driver/verification-done', 'verification.complete')->name('verification.complete');

Route::post('logout', function () {
    session()->forget('user');
    return to_route('home');
})->name('logout');
