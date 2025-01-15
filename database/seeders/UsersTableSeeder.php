<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Admin User',
            'email' => 'arvid@darvis.nl',
            'password' => Hash::make('Qwerty1234'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
