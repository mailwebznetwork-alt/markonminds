<?php

namespace App\Livewire\Admin\Workspaces;

use Livewire\Component;

class ArchitectPages extends Component
{
    public array $rows = [];

    public function mount(): void
    {
        $this->rows = [
            ['name' => 'Home', 'slug' => 'home', 'live' => true],
            ['name' => 'About', 'slug' => 'about', 'live' => false],
        ];
    }

    public function createPage(): void
    {
        $this->rows[] = [
            'name' => 'New Page',
            'slug' => 'new-page',
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

    public function revisionHistory(int $index): void {}

    public function render()
    {
        return view('livewire.admin.workspaces.architect-pages');
    }
}
