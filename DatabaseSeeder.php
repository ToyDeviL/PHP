<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Andrino',
            'email' => 'andrino@example.com',
            'password' => Hash::make('Rebecca@2023'),
        ]);
    }
}
