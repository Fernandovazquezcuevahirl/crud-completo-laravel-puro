<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'title' => 'primer post',
            'slug' => 'primer slug',
            'content' => 'contenido prueba 123',
            'description' => 'descripcion prueba 123',
            'posted' => 'not',
            'category_id' => '1'

        ]);
        Post::create([
            'title' => 'segundo post',
            'slug' => 'segundo slug',
            'content' => 'contenido prueba 123',
            'description' => 'descripcion prueba 123',
            'posted' => 'yes',
            'category_id' => '2'

        ]);
        Post::create([
            'title' => 'tercer post',
            'slug' => 'tercer slug',
            'content' => 'contenido prueba 123',
            'description' => 'descripcion prueba 123',
            'posted' => 'not',
            'category_id' => '3'

        ]);
    }
}
