<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AvatarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('avatars')->insert([
            [
                'name' => 'Homme',
                'src' => 'avatar1.jpeg'
            ],
            [
                'name' => 'Femme',
                'src' => 'avatar2.jpeg'
            ],
        ]);
    }
}
