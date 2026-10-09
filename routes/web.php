<?php

use App\Http\Controllers\DonationController;
use App\Livewire\Admin\DonationSettings;
use Illuminate\Support\Facades\Route;

Route::view('/', 'about')->name('home');
Route::get('donations', [DonationController::class, 'index'])->name('donations');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

Route::middleware(['auth', 'can:admin'])->group(function () {
    Route::livewire('admin/donations', DonationSettings::class)
        ->name('admin.donations.edit');
});

require __DIR__.'/settings.php';
