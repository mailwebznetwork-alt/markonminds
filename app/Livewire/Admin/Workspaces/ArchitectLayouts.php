<?php

namespace App\Livewire\Admin\Workspaces;

use Livewire\Component;

class ArchitectLayouts extends Component
{
    public array $rows = [];

    public function mount(): void
    {
        $this->rows = [
            ['name' => 'Primary Layout', 'code' => 'layout-pr-01', 'live' => true],
            ['name' => 'Landing Layout', 'code' => 'layout-ld-01', 'live' => false],
        ];
    }

    public function createLayout(): void
    {
        $this->rows[] = [
            'name' => 'New Layout',
            'code' => 'layout-new-01',
            'live' => false,
        ];
    }

    public function toggleLive(int $index): void
    {
        $this->rows[$index]['live'] = ! $this->rows[$index]['live'];
    }

    public function duplicateItem(int $index): void
    {
        $duplicate = $this->rows[$index];
        $duplicate['name'] .= ' Copy';
        $this->rows[] = $duplicate;
    }

    public function deleteItem(int $index): void
    {
        unset($this->rows[$index]);
        $this->rows = array_values($this->rows);
    }

    public function editItem(int $index): void {}

    public function reviewItem(int $index): void {}

    public function render()
    {
        return view('livewire.admin.workspaces.architect-layouts');
    }
}
