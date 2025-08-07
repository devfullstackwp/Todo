<?php

namespace App\Livewire;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {

        $data = [
            'heading' => 'Accueil',
        ];

        return view('livewire.home-new',$data)
        ->title('Blog -'.config('app.name'))
        ->layoutData(
            [
                'description' => 'Retrouvez tout les articles du blog',
            ]
        );
    }
}
