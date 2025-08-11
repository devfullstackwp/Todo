<?php

namespace App\Livewire\Articles;

use App\Models\Article;
use Livewire\Component;

class ShowArticleDetail extends Component
{
    public Article $article;
    public $comments;
    public $id;

    public function mount(Article $article)
    {
        $this->article = $article->load([
                    'photos',
                    'user.avatar',
                    'category',
                ]);
    }

    public function render()
    {
        $data = [
            'heading' => $this->article->title,
            'article' => $this->article,
        ];

        return view('livewire.articles.show-article-detail', $data);
    }
}
