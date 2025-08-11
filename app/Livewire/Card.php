<?php

namespace App\Livewire;

use Livewire\Component;

class Card extends Component
{
    public $article;
    public $search = '';

    public function mount($article, $search = '')
    {
        $this->article = $article;
        $this->search = $search;
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
        return view('livewire.card');
    }
}
