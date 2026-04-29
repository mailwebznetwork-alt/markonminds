<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\MarketingInsightsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::get('/marketing-insights', [MarketingInsightsController::class, 'index'])->name('marketing-insights.index');
    Route::post('/marketing-insights', [MarketingInsightsController::class, 'generate'])->name('marketing-insights.generate');
});
