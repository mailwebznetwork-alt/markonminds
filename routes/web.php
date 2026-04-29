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
    });

    Route::redirect('/dashboard', '/admin')->name('dashboard');
});
