<?php

namespace App\Livewire;

use App\Http\Controllers\Services\ArticlesService;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Article;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Layout;

class Home extends Component
{
    use WithPagination;
    private ArticlesService $articlesService;

    public string $sort = '';
    public string $direction = 'desc';
    public string $search = '';

    public function boot(ArticlesService $articlesService)
    {
        $this->articlesService = $articlesService;
    }

    #[Computed]
    public function getArticles(){
        if (! in_array($this->direction, ['asc', 'desc'])) {
            $this->direction = 'desc';
        }
        
        $query = Article::query()->published();
        
        // Ajouter la recherche si elle existe
        if (!empty($this->search)) {
            $query->where(function($q) {
                $q->where('articles.title', 'like', '%' . $this->search . '%')
                  ->orWhereHas('user', function($userQuery) {
                      $userQuery->where('name', 'like', '%' . $this->search . '%');
                  })
                  ->orWhereHas('category', function($categoryQuery) {
                      $categoryQuery->where('name', 'like', '%' . $this->search . '%');
                  });
            });
        }
        
        return $this->articlesService
        ->getAll($query, $this->sort, $this->direction)
        ->paginate(9);
    }

    #[On('updateSort')]
    public function updatedSort($sort, $direction)
    {
        $this->sort = $sort;
        $this->direction = $direction;
        $this->resetPage();
    }

    #[On('updateSearch')]
    public function updatedSearch($search)
    {
        $this->search = $search;
        $this->resetPage();
    }

    /**
     * Surligne les termes de recherche dans le texte
     */
    public function highlightSearch($text)
    {
        if (empty($this->search) || empty($text)) {
            return $text;
        }

        $searchTerm = preg_quote($this->search, '/');
        return preg_replace(
            '/(' . $searchTerm . ')/i',
            '<mark class="bg-blue-200 text-blue-800 px-1 rounded">$1</mark>',
            $text
        );
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
