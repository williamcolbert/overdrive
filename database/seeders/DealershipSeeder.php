<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DealershipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dealerships')->insert([
            ['name' => 'Rountree Moore Chevrolet'],
            ['name' => 'Rountree Moore Ford'],
            ['name' => 'Rountree Moore Kia'],
            ['name' => 'Rountree Moore Nissan'],
            ['name' => 'Rountree Moore Toyota'],
        ]);
    }
}
