<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            [
                'src' => 'image1.jpeg',
                'category_id' => 1
            ],
            [
                'src' => 'art1.jpeg',
                'category_id' => 1
            ],
            [
                'src' => 'art2.jpeg',
                'category_id' => 1
            ],
            [
                'src' => 'art3.jpeg',
                'category_id' => 1
            ],
            [
                'src' => 'jeu1.jpeg',
                'category_id' => 2
            ],
            [
                'src' => 'jeu2.jpeg',
                'category_id' => 2
            ],
            [
                'src' => 'jeu3.jpeg',
                'category_id' => 2
            ],
            [
                'src' => 'jeu4.jpeg',
                'category_id' => 2
            ],
            [
                'src' => 'voiture1.jpeg',
                'category_id' => 3
            ],
            [
                'src' => 'voiture2.jpeg',
                'category_id' => 3
            ],
            [
                'src' => 'voiture3.jpeg',
                'category_id' => 3
            ],
            [
                'src' => 'voiture4.jpeg',
                'category_id' => 3
            ],
            [
                'src' => 'appareil1.jpeg',
                'category_id' => 4
            ],
            [
                'src' => 'appareil2.jpeg',
                'category_id' => 4
            ],
            [
                'src' => 'appareil3.jpeg',
                'category_id' => 4
            ],
            [
                'src' => 'appareil4.jpeg',
                'category_id' => 4
            ],
        ]);
    }
}
