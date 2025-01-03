<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Teknoloji',
            'Gündem',
            'Spor',
            'Magazain',
            'Dünya',
        ];
        $i = 1;
        foreach ($categories as $category) {
            Category::create([
                'name' => $category,
                'order_no' => $i++,

            ]);

        }
    }
}
