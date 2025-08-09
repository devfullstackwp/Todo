<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Avatar>
 */
class AvatarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Utiliser un service d'avatar placeholder
        $avatarId = random_int(1, 100);
        $size = 500;
        
        // Service d'avatars aléatoires (gratuit)
        $avatarUrl = "https://i.pravatar.cc/{$size}?img={$avatarId}";
        
        return [
            'path' => $avatarUrl,
            'url' => $avatarUrl,
            'thumbmail_path' => $avatarUrl,
            'thumbmail_url' => $avatarUrl,
            'size' => random_int(10000, 100000), // Taille simulée
            'width' => $size,
            'height' => $size,
        ];
    }
}
