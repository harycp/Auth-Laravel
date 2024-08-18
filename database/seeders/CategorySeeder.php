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
        ]);
        Category::create([
            'name' => 'Design',
            'slug' => 'design',
        ]);
        Category::create([
            'name' => 'Javascript',
            'slug' => 'javascript',
        ]);
        Category::create([
            'name' => 'Laravel 11',
            'slug' => 'laravel-11',
        ]);
    }
}
