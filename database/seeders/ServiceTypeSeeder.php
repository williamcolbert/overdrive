<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service_types')->insert([
            [
                'code' => '05-110000',
                'name' => 'New Car Processing',
            ],
            [
                'code' => '05-110001',
                'name' => 'Used Car Processing',
            ],
            [
                'code' => '05-110003',
                'name' => 'New Car Detail (PDI)',
            ],
            [
                'code' => '05-110005',
                'name' => 'Used Car Detail (UCI)',
            ],
            [
                'code' => '05-110004',
                'name' => 'New Car Delivery',
            ],
            [
                'code' => '05-110011',
                'name' => 'Used Car Delivery',
            ],
            [
                'code' => '05-110016',
                'name' => 'Mini Detail (Service)',
            ],
            [
                'code' => '05-110018',
                'name' => 'Service Wash',
            ],
            [
                'code' => '05-110049',
                'name' => 'Trade-in Processing',
            ],

            [
                'code' => '05-110014',
                'name' => 'Xzilon',
            ],
            [
                'code' => '05-110094',
                'name' => 'Rental Clean',
            ],
            [
                'code' => '05-110007',
                'name' => 'Wash n Vac',
            ],
            [
                'code' => '05-110022',
                'name' => 'Full Detail',
            ],
        ]);
    }
}
