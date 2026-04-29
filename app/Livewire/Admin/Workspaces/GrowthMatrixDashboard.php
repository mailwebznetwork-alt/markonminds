<?php

namespace App\Livewire\Admin\Workspaces;

use Livewire\Component;

class GrowthMatrixDashboard extends Component
{
    public int $refreshCounter = 0;

    public string $lastAction = 'No actions triggered yet.';

    public function refreshMatrix(): void
    {
        $this->refreshCounter++;
    }

    public function runQuickAction(string $action): void
    {
        $this->lastAction = 'Quick action executed: '.$action;
        $this->refreshCounter++;
    }

    public function getTagEngineHealthProperty(): string
    {
        return $this->refreshCounter % 2 === 0 ? 'Stable' : 'Syncing';
    }

    public function render()
    {
        return view('livewire.admin.workspaces.growth-matrix-dashboard');
    }
}
