<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'title' => 'categoria 1',
                     ]);
        Category::create([
            'title' => 'categoria 2',
                     ]);
        Category::create([
            'title' => 'categoria 2',
                     ]);
    }
}
