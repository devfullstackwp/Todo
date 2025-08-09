<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Photo>
 */
class PhotoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Utiliser des images placeholder en ligne (fonctionne partout)
        $imageNumber = random_int(1, 10);
        $width = 421;
        $height = 280;
        
        // URL d'image placeholder (service gratuit)
        $placeholderUrl = "https://picsum.photos/{$width}/{$height}?random={$imageNumber}";
        
        return [
            'path' => $placeholderUrl, // URL directe pour éviter les problèmes de storage
            'url' => $placeholderUrl,
            'thumbmail_path' => $placeholderUrl,
            'thumbmail_url' => $placeholderUrl,
            'size' => random_int(50000, 500000), // Taille simulée
            'width' => $width,
            'height' => $height,
        ];
    }
}
