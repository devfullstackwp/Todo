<?php

namespace App\Livewire;

use App\Http\Controllers\Services\ArticlesService;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Article;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;

class Home extends Component
{
    use WithPagination;
    private ArticlesService $articlesService;

    public string $sort = '';
    public string $direction = 'desc';

    #[On('sortChanged')]//En provenance du composant filters
    public function sortChanged($sort){
        $this->sort = $sort;
    }

    #[On('directionChanged')]//En provenance du composant filters
    public function directionChanged($direction){
        $this->direction = $direction;
    }

    public function boot(ArticlesService $articlesService)
    {
        $this->articlesService = $articlesService;
    }

    #[Computed]
    public function getArticles(){
        if (! in_array($this->direction, ['asc', 'desc'])) {
            $this->direction = 'desc';
        }
        return $this->articlesService
        ->getAll(Article::query()->published(), $this->sort, $this->direction)
        ->paginate(9);
    }

    public function render()
    {

        $data = [
            'heading' => 'Accueil',
            'articles' => $this->getArticles(),
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
