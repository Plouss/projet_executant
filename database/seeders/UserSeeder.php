<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'lastname' => 'Admin',
                'age' => '20',
                'avatar_id' => 1,
                'role_id' => 1,
                'email' => 'admin@admin.com',
                'password' => Hash::make('admin@admin.com')
            ],
            [
                'name' => 'Member',
                'lastname' => 'Member',
                'age' => '29',
                'avatar_id' => 1,
                'role_id' => 2,
                'email' => 'member@member.com',
                'password' => Hash::make('member@member.com')
            ]
        ]);
    }
}
