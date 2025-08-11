<?php

namespace App\Livewire;

use Livewire\Component;

class Criteria extends Component
{
    public $sort, $direction, $search = '';

    public function mount($sort, $direction)
    {
        $this->sort = $sort;
        $this->direction = $direction;
    }

    public function updatedSort()
    {
        $this->dispatch('updateSort', $this->sort, $this->direction);
        $this->dispatch('updateSearch', $this->search);
    }

    public function updatedDirection()
    {
        $this->dispatch('updateSort', $this->sort, $this->direction);
        $this->dispatch('updateSearch', $this->search);
    }

    public function updatedSearch()
    {
        $this->dispatch('updateSort', $this->sort, $this->direction);
        $this->dispatch('updateSearch', $this->search);
    }

    public function resetFilters()
    {
        $this->search = '';
        $this->sort = '';
        $this->direction = 'desc';
        $this->dispatch('updateSort', $this->sort, $this->direction);
        $this->dispatch('updateSearch', $this->search);
    }

    public function render()
    {
        return view('livewire.criteria');
    }
}