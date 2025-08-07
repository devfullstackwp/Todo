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
        Storage::disk('public')->createDirectory('avatars');

        $userImg = Arr::random(['php_fan.jpeg', 'js_fan.jpeg']);

        return [
            'path' => $path = Storage::disk('public')->putFile('avatars', public_path('default_images/' . $userImg)),
            'url' => $url = Storage::disk('public')->url($path),
            'thumbmail_path' => $path,
            'thumbmail_url' => $url,
            'size' => 1024 * 1024 * random_int(1, 5),
            'width' => 500,
            'height' => 500,
        ];
    }
}
