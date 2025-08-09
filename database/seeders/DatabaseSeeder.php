<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Article;
use App\Models\Photo;
use App\Models\Avatar;
use App\Models\Category;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Category::factory(10)->create();

        User::factory(10)
        ->has(
            Article::factory()
                ->count(rand(5,10))
                ->has(Photo::factory()->count(rand(1,5)))
        )
        ->has(Avatar::factory())
        ->create();
    }
}
