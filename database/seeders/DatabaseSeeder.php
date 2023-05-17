<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

       DB::table('users')->insert([
        'name' => 'admin',
        'email' => 'admin@example.com',
        'role' => '1',
        'is_active' => '1',
        'password' => bcrypt('password123'),
       ]);
    }
}
