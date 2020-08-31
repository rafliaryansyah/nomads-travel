<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Jawa',
            'slug' => \Str::slug('Jawa')
        ]);

        Category::create([
            'name' => 'Sumatera',
            'slug' => \Str::slug('Sumatera')
        ]);

        Category::create([
            'name' => 'Nusa Tenggara',
            'slug' => \Str::slug('Nuga Tenggara')
        ]);

        Category::create([
            'name' => 'Papua',
            'slug' => \Str::slug('Papua')
        ]);
    }
}
