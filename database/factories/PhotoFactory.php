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
        // Créer le dossier photos s'il n'existe pas
        Storage::disk('public')->makeDirectory('photos');
        
        // Choisir une image par défaut (1, 2 ou 3)
        $imageNumber = random_int(1, 3);
        $sourceImagePath = public_path("default_images/image{$imageNumber}.png");
        
        // Générer un nom unique pour éviter les conflits
        $filename = 'photo_' . uniqid() . '.png';
        $relativePath = "photos/{$filename}";
        
        // Copier le fichier vers storage/app/public/photos/
        if (file_exists($sourceImagePath)) {
            Storage::disk('public')->put($relativePath, file_get_contents($sourceImagePath));
        } else {
            // Si les images par défaut n'existent pas, créer un placeholder
            Storage::disk('public')->put($relativePath, 'placeholder image content');
        }
        
        return [
            'path' => $relativePath,
            'url' => Storage::disk('public')->url($relativePath),
            'thumbmail_path' => $relativePath, // Même fichier pour le thumbnail
            'thumbmail_url' => Storage::disk('public')->url($relativePath),
            'size' => filesize(storage_path("app/public/{$relativePath}")) ?: random_int(1024, 1024 * 1024 * 5),
            'width' => 421,
            'height' => 280,
        ];
    }
}
