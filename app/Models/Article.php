<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Photo;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Category;

class Article extends Model
{
    use HasFactory;

    /** @use HasFactory<\Database\Factories\ArticleFactory> */
    protected $guarded = [];

    public const STATUS_DRAFT = 'draft';
    public const STATUS_PUBLISHED = 'published';

    public static function boot(){
        parent::boot();
        static::creating(function ($article){
            $article->slug = Str::slug($article->title);
        });
    }

    public function category() : BelongsTo{
        return $this->belongsTo(Category::class);
    }

    public function scopePublished(Builder $query){
        return $query->where('status', self::STATUS_PUBLISHED);
    }

    public function scopeSort(Builder $query, $sort = null, $direction = null){
        
        return match($sort){
           'author' => $query->orderBy(User::select('name')
                ->whereHas('articles')
                ->whereColumn('articles.user_id', 'users.id')
                ->orderBy('name')
                ->take(1),
                $direction
            ),
           'category' => $query->orderBy(Category::select('name')
                ->whereColumn('articles.category_id', 'categories.id')
                ->orderBy('name')
                ->take(1),  
                $direction
            ),
           'date' => $query->orderBy('created_at', $direction),    
           default => $query->orderBy('created_at', 'desc')
        };
    }

    public function user() : BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function photos() : HasMany{
        return $this->hasMany(Photo::class)->latest('id');
    }

    public function photo() : HasOne{
        return $this->hasOne(Photo::class)->latestOfMany();
    }
}
