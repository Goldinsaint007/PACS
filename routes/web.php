<?php

use App\Http\Controllers\MessengerController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::get('messenger', [MessengerController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('messenger');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
