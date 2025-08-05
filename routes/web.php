<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Auth\Register;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');


Route::middleware(['guest'])->group(function () {
    Route::get('register', Register::class)->name('register');
});

//require __DIR__.'/auth.php';
