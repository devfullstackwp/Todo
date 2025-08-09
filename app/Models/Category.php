<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;
use App\Models\Article;

class Category extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory;


    protected $guarded = [];


    public static function boot(){
        parent::boot();
        static::creating(function (Category $category){
            $category->slug = Str::slug($category->name);
        });
    }

    public function getRouteKeyName() : string {
        return 'slug';//On passe dans l'url pour récupérer la catégorie
    }

    public function articles() : HasMany{
        return $this->hasMany(Article::class);
    }
}
