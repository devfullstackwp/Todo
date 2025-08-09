<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithPagination;

class Home extends Component
{
    use WithPagination;

    public function render()
    {

        //dd(Article::query()->published()->with(['user','photo'])->latest()->paginate(9));


        $data = [
            'heading' => 'Accueil',
            'articles' => Article::query()
            ->published()
            ->with(['user.avatar','photo'])
            ->latest()
            ->paginate(9)
        ];

        return view('livewire.home',$data)
        ->title('Blog -'.config('app.name'))
        ->layoutData(
            [
                'description' => 'Retrouvez tout les articles du blog',
            ]
        );
    }
}
