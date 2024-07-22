<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category::factory(5)->create(),

        Category::factory()->create([
            'name' => 'Web Developer',
            'slug' => 'web-developer'
        ]);

        Category::factory()->create([
            'name' => 'UI/UX',
            'slug' => 'ui-ux'
        ]);

        Category::factory()->create([
            'name' => 'Machine Learning',
            'slug' => 'machine-learning'
        ]);
    }
}
