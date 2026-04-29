<?php

use App\Livewire\Admin\MasterConsole;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/', MasterConsole::class)->name('dashboard');
        Route::get('/operations/bookings', MasterConsole::class)->name('operations.bookings');
        Route::get('/operations/jobs', MasterConsole::class)->name('operations.jobs');
        Route::get('/operations/services', MasterConsole::class)->name('operations.services');
        Route::get('/operations/locations', MasterConsole::class)->name('operations.locations');
    });

    Route::redirect('/dashboard', '/admin')->name('dashboard');
});
