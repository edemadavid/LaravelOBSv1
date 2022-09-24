<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('currency')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Naira',
                'created_at' => now(),
                'updated_at' => now()
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Dollar',
                'created_at' => now(),
                'updated_at' => now()
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Pounds',
                'created_at' => now(),
                'updated_at' => now()
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'Euro',
                'created_at' => now(),
                'updated_at' => now()
            ),

        ));
    }
}
