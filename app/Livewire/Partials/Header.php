<?php

namespace App\Livewire\Partials;

use App\Models\Category;
use Livewire\Component;
use Livewire\Attributes\Computed;

class Header extends Component
{

    #[Computed(cache:true, key:'header-categories')]
    public function categories()
    {
        return Category::query()
        ->whereHas('articles', fn($query) => $query->published())
        ->orderBy('name')->get();
    }

    public function render()
    {
        return view('livewire.partials.header');
    }
}
