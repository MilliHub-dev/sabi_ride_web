<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;


Volt::route('/signup', 'home.signup')->name('signup');
Volt::route('driver', 'home.driver')->name('driver');
Volt::route('/', 'home.index')->name('home');
Volt::route('driver/verification', 'verification.main')->name('application.verification');
Volt::route('driver/login', 'auth.login')->name('login');
Volt::route('/driver/verify-account', 'auth.verify')->name('verify.account');
