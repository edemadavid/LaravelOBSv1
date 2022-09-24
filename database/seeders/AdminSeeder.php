<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('users')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password'=> bcrypt('password'),
                'created_at' => now(),
                'updated_at' => now(),
                'is_admin' => 1,
            ),

        ));
    }
}

