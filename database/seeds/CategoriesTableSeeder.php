<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'kuliner',
            'slug' => 'kuliner'
        ]);
        Category::create([
            'name' => 'kebudayaan',
            'slug' => 'kebudayaan'
        ]);
        Category::create([
            'name' => 'wisata',
            'slug' => 'wisata'
        ]);
        Category::create([
            'name' => 'event',
            'slug' => 'event'
        ]);
        Category::create([
            'name' => 'tiket',
            'slug' => 'tiket'
        ]);
    }
}
