<?php

namespace App\Http\Controllers\Services;

use App\Models\Article;
use Illuminate\Database\Eloquent\Builder;

class ArticlesService
{
   //Objectif d'un service est d'éviter la duplication de code
   //On va donc mettre ici les méthodes qui seront utilisées dans plusieurs contrôleurs 
   //Code pour récupérer les articles
   //$sort = par auteurs, nombre de likes, date publication
   public function getAll(Builder $query, $sort = null, $direction = null)
   {
      $query->with(['user.avatar', 'photo', 'category','photos']);
      $query->unless($sort, fn(Builder $query) => $query->latest());
      $query->when($sort, fn(Builder $query) => $query->sort($sort, $direction));
      
      return $query;
   }
}   