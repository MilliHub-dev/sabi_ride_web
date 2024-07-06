<?php

use Livewire\Volt\Volt;


Volt::route('/', 'home.index')->name('home');
Volt::route('driver', 'home.driver')->name('driver');
Volt::route('services', 'home.services')->name('services');

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


Route::get('test', function () {
    $token = session('user')['access_token'];

    // return Storage::disk('ie2')->put('second.txt', "hello world");
    $response = Http::withToken($token)->get(env('BASE_URL') . '/api/v1/users/driver-verification');

    return $response->json()['data']['verification_comment'];
});
