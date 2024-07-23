<?php

use Livewire\Volt\Volt;


Volt::route('/', 'home.index')->name('home');
Volt::route('driver', 'home.driver')->name('driver');
Volt::route('services', 'home.services')->name('services');
Volt::route('about', 'home.about')->name('about');

Volt::route('terms', 'legal.terms.main')->name('terms');
Volt::route('terms/general', 'legal.terms.general')->name('general.terms');
Volt::route('terms/drivers', 'legal.terms.drivers')->name('drivers.terms');
Volt::route('terms/riders', 'legal.terms.riders')->name('riders.terms');

Volt::route('policy', 'legal.policy')->name('policy');



Volt::route('signup', 'home.signup')->name('signup');
Volt::route('login', 'auth.login')->name('login');
Volt::route('/driver/verify-account', 'auth.verify')->name('verify.account');


Volt::route('driver/verification', 'verification.main')->name('verification.start');
Volt::route('/driver/verification-done', 'verification.complete')->name('verification.complete');

Route::post('logout', function () {
    session()->forget('user');
    session()->forget('vehicle_details');
    session()->forget('licensing_details');
    session()->forget('documents');
    session()->forget('verification_status');
    return to_route('home');
})->name('logout');
