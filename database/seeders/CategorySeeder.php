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
        Category::create([
            'name' => 'Programming',
            'slug' => 'programming',
            'color' => 'red',
        ]);
        Category::create([
            'name' => 'Design',
            'slug' => 'design',
            'color' => 'blue',
        ]);
        Category::create([
            'name' => 'Javascript',
            'slug' => 'javascript',
            'color' => 'green',
        ]);
        Category::create([
            'name' => 'Laravel 11',
            'slug' => 'laravel-11',
            'color' => 'purple',
        ]);
    }
}
