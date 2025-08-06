<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Auth\Register;
use Illuminate\Auth\AuthManager;
use Illuminate\Support\Facades\Auth;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Forgot;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');


Route::middleware(['guest'])->group(function () {
    Route::get('register', Register::class)->name('register');
    Route::get('login', Login::class)->name('login');
    Route::get('forgot', Forgot::class)->name('forgot');
});

Route::middleware(['auth'])->group(function () {
    Route::get('logout', function(){
        Auth::logout();
        return redirect('/');
    })->name('logout');
});





//auth() Helper function qui retourne l'instance du AuthManager
//Classe source
//Classe : Illuminate\Auth\AuthManager
//Méthode : logout()
//Namespace : Illuminate\Auth
// Toutes ces syntaxes font la même chose :
//auth()->logout();                           // Helper function
//Auth::logout();                             // Facade
//app('auth')->logout();                      // Service container
//request()->user()->logout();                // Via request
//Illuminate\Support\Facades\Auth::logout();  // Facade complète