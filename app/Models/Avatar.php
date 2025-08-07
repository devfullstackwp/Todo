<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Avatar extends Model
{
    /** @use HasFactory<\Database\Factories\AvatarFactory> */
    use HasFactory;
    
    // Option 1 : Aucune protection (tous les champs autorisés)
    protected $guarded = [];
    
    // Option 2 : Protection sélective (recommandée)
    // protected $fillable = ['path', 'url', 'size'];
    
    // Option 3 : Liste noire
    // protected $guarded = ['id', 'created_at', 'updated_at'];

    public function user() : BelongsTo {
        return $this->belongsTo(User::class);
    }
}



