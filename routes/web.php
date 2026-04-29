<?php

use App\Livewire\Admin\Workspaces\AdClusters;
use App\Livewire\Admin\Workspaces\ApiKeys;
use App\Livewire\Admin\Workspaces\AuditLogs;
use App\Livewire\Admin\Workspaces\BlockBuilder;
use App\Livewire\Admin\Workspaces\Bookings;
use App\Livewire\Admin\Workspaces\ContentWriting;
use App\Livewire\Admin\Workspaces\Gtm;
use App\Livewire\Admin\Workspaces\JobPortal;
use App\Livewire\Admin\Workspaces\LocalSeo;
use App\Livewire\Admin\Workspaces\Locations;
use App\Livewire\Admin\Workspaces\MarketingStrategy;
use App\Livewire\Admin\Workspaces\NodeScaling;
use App\Livewire\Admin\Workspaces\PageBuilder;
use App\Livewire\Admin\Workspaces\PageStyle;
use App\Livewire\Admin\Workspaces\PerformanceMetrics;
use App\Livewire\Admin\Workspaces\PrivacyEeat;
use App\Livewire\Admin\Workspaces\ReviewsRatings;
use App\Livewire\Admin\Workspaces\Roles;
use App\Livewire\Admin\Workspaces\Seo;
use App\Livewire\Admin\Workspaces\Services;
use App\Livewire\Admin\Workspaces\SystemStatus;
use App\Livewire\Admin\Workspaces\ThirdPartySetup;
use App\Livewire\Admin\Workspaces\Webhooks;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::redirect('/', '/admin/performance-metrics')->name('dashboard');

        Route::get('/performance-metrics', PerformanceMetrics::class)->name('performance-metrics');
        Route::get('/system-status', SystemStatus::class)->name('system-status');

        Route::get('/bookings', Bookings::class)->name('bookings');
        Route::get('/job-portal', JobPortal::class)->name('job-portal');
        Route::get('/services', Services::class)->name('services');
        Route::get('/locations', Locations::class)->name('locations');

        Route::get('/page-style', PageStyle::class)->name('page-style');
        Route::get('/page-builder', PageBuilder::class)->name('page-builder');
        Route::get('/block-builder', BlockBuilder::class)->name('block-builder');
        Route::get('/content-writing', ContentWriting::class)->name('content-writing');

        Route::get('/marketing-strategy', MarketingStrategy::class)->name('marketing-strategy');
        Route::get('/ad-clusters', AdClusters::class)->name('ad-clusters');

        Route::get('/reviews-ratings', ReviewsRatings::class)->name('reviews-ratings');
        Route::get('/privacy-eeat', PrivacyEeat::class)->name('privacy-eeat');

        Route::get('/api-keys', ApiKeys::class)->name('api-keys');
        Route::get('/webhooks', Webhooks::class)->name('webhooks');
        Route::get('/third-party-setup', ThirdPartySetup::class)->name('third-party-setup');

        Route::get('/seo', Seo::class)->name('seo');
        Route::get('/local-seo', LocalSeo::class)->name('local-seo');
        Route::get('/gtm', Gtm::class)->name('gtm');
        Route::get('/node-scaling', NodeScaling::class)->name('node-scaling');

        Route::get('/roles', Roles::class)->name('roles');
        Route::get('/audit-logs', AuditLogs::class)->name('audit-logs');
    });

    Route::redirect('/dashboard', '/admin')->name('dashboard');
});
