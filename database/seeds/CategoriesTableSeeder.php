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
            'name' => 'Kuliner',
            'slug' => 'kuliner'
        ]);
        Category::create([
            'name' => 'Kebudayaan',
            'slug' => 'kebudayaan'
        ]);
        Category::create([
            'name' => 'Wisata',
            'slug' => 'wisata'
        ]);
        Category::create([
            'name' => 'Event',
            'slug' => 'event'
        ]);
        Category::create([
            'name' => 'Tiket',
            'slug' => 'tiket'
        ]);

        Category::create([
            'name' => 'Berita',
            'slug' => 'berita'
        ]);    }
}
