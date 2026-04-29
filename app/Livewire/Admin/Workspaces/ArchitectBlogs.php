<?php

namespace App\Livewire\Admin\Workspaces;

use Livewire\Component;

class ArchitectBlogs extends Component
{
    public array $rows = [];

    public function mount(): void
    {
        $this->rows = [
            ['title' => 'Launch Story', 'slug' => 'launch-story', 'live' => true],
            ['title' => 'New Services', 'slug' => 'new-services', 'live' => false],
        ];
    }

    public function createBlog(): void
    {
        $this->rows[] = [
            'title' => 'New Blog',
            'slug' => 'new-blog',
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
        $duplicate['title'] .= ' Copy';
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
        return view('livewire.admin.workspaces.architect-blogs');
    }
}
