<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\On;

class Filters extends Component
{
    use WithPagination;
    public string $sort = '';
    public string $direction = 'desc';

    public function changeSort($sortValue = null){
        $this->sort = $sortValue ?? '';
        $this->dispatch('sortChanged', $this->sort);
    }

    public function changeDirection($direction = null){
        $this->direction = $direction ?? 'desc';
        $this->dispatch('directionChanged', $this->direction);
    }

    public function render()
    {
        return view('livewire.filters');
    }
}
