<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\News;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::all();
        foreach ($categories as $category) {
            for ($i = 0; $i < 10; $i++) {
                News::create([
                    'category_id' => 1,
                    'title' => fake()->text,
                    'description' => fake()->text,
                    'image' => fake()->imageUrl,
                    'content' => fake()->text,


                ]);
            }
        }
    }
}
