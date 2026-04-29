<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class MasterConsole extends Component
{
    public array $categories = [
        'dashboard' => [
            'label' => 'Dashboard',
            'icon' => 'chart',
            'tabs' => [
                ['slug' => 'performance-metrics', 'label' => 'Performance Metrics', 'component' => 'admin.workspaces.performance-metrics'],
                ['slug' => 'system-status', 'label' => 'System Status', 'component' => 'admin.workspaces.system-status'],
            ],
        ],
        'operations' => [
            'label' => 'Operations',
            'icon' => 'gear',
            'tabs' => [
                ['slug' => 'bookings', 'label' => 'Bookings', 'component' => 'admin.workspaces.bookings'],
                ['slug' => 'job-portal', 'label' => 'Job Portal', 'component' => 'admin.workspaces.job-portal'],
                ['slug' => 'services', 'label' => 'Services', 'component' => 'admin.workspaces.services'],
                ['slug' => 'locations', 'label' => 'Locations', 'component' => 'admin.workspaces.locations'],
            ],
        ],
        'site-architect' => [
            'label' => 'Site Architect',
            'icon' => 'build',
            'tabs' => [
                ['slug' => 'pages', 'label' => 'Pages', 'component' => 'admin.workspaces.architect-pages'],
                ['slug' => 'blocks', 'label' => 'Blocks', 'component' => 'admin.workspaces.architect-blocks'],
                ['slug' => 'blogs', 'label' => 'Blogs', 'component' => 'admin.workspaces.architect-blogs'],
                ['slug' => 'layout', 'label' => 'Layout', 'component' => 'admin.workspaces.architect-layouts'],
            ],
        ],
        'marketing' => [
            'label' => 'Marketing',
            'icon' => 'rocket',
            'tabs' => [
                ['slug' => 'growth-matrix', 'label' => 'Growth Matrix Dashboard', 'component' => 'admin.workspaces.growth-matrix-dashboard'],
            ],
        ],
        'integrity' => [
            'label' => 'Integrity',
            'icon' => 'shield',
            'tabs' => [
                ['slug' => 'reviews-ratings', 'label' => 'Reviews & Ratings', 'component' => 'admin.workspaces.reviews-ratings'],
                ['slug' => 'privacy-eeat', 'label' => 'Privacy/EEAT', 'component' => 'admin.workspaces.privacy-eeat'],
            ],
        ],
        'integrations' => [
            'label' => 'Integrations',
            'icon' => 'plug',
            'tabs' => [
                ['slug' => 'api-keys', 'label' => 'API Keys', 'component' => 'admin.workspaces.api-keys'],
                ['slug' => 'webhooks', 'label' => 'Webhooks', 'component' => 'admin.workspaces.webhooks'],
                ['slug' => 'third-party-setup', 'label' => 'Third-party Setup', 'component' => 'admin.workspaces.third-party-setup'],
            ],
        ],
        'growth-center' => [
            'label' => 'Growth Centre',
            'icon' => 'growth',
            'tabs' => [
                ['slug' => 'aio', 'label' => 'AIO', 'component' => 'admin.workspaces.aio'],
                ['slug' => 'seo', 'label' => 'SEO', 'component' => 'admin.workspaces.seo'],
                ['slug' => 'geo', 'label' => 'GEO', 'component' => 'admin.workspaces.geo'],
                ['slug' => 'ga4', 'label' => 'GA4', 'component' => 'admin.workspaces.ga4'],
                ['slug' => 'gtm', 'label' => 'GTM', 'component' => 'admin.workspaces.gtm'],
                ['slug' => 'meta', 'label' => 'Meta', 'component' => 'admin.workspaces.meta'],
                ['slug' => 'gmb', 'label' => 'GMB', 'component' => 'admin.workspaces.gmb'],
                ['slug' => 'rivals', 'label' => 'Rivals', 'component' => 'admin.workspaces.rivals'],
                ['slug' => 'node-scaling', 'label' => 'Node Scaling', 'component' => 'admin.workspaces.node-scaling'],
            ],
        ],
        'user-management' => [
            'label' => 'User Management',
            'icon' => 'users',
            'tabs' => [
                ['slug' => 'roles', 'label' => 'Roles', 'component' => 'admin.workspaces.roles'],
                ['slug' => 'audit-logs', 'label' => 'Audit Logs', 'component' => 'admin.workspaces.audit-logs'],
            ],
        ],
    ];

    public string $activeCategory = 'dashboard';

    public string $activeTab = 'performance-metrics';

    public function mount(): void
    {
        $operationRouteMap = [
            'admin.operations.bookings' => 'bookings',
            'admin.operations.jobs' => 'job-portal',
            'admin.operations.services' => 'services',
            'admin.operations.locations' => 'locations',
        ];

        $currentRouteName = request()->route()?->getName();

        if ($currentRouteName !== null && isset($operationRouteMap[$currentRouteName])) {
            $this->activeCategory = 'operations';
            $this->activeTab = $operationRouteMap[$currentRouteName];

            return;
        }

        $firstTab = $this->categories[$this->activeCategory]['tabs'][0]['slug'];
        $this->activeTab = $firstTab;
    }

    public function selectCategory(string $category): void
    {
        if (! isset($this->categories[$category])) {
            return;
        }

        $this->activeCategory = $category;
        $this->activeTab = $this->categories[$category]['tabs'][0]['slug'];
    }

    public function selectTab(string $tab): void
    {
        foreach ($this->activeTabs as $activeTab) {
            if ($activeTab['slug'] === $tab) {
                $this->activeTab = $tab;

                return;
            }
        }
    }

    public function getActiveTabsProperty(): array
    {
        return $this->categories[$this->activeCategory]['tabs'];
    }

    public function getActiveTabConfigProperty(): array
    {
        foreach ($this->activeTabs as $tab) {
            if ($tab['slug'] === $this->activeTab) {
                return $tab;
            }
        }

        return $this->activeTabs[0];
    }

    public function render()
    {
        return view('livewire.admin.master-console')
            ->layout('components.layouts.console');
    }
}
