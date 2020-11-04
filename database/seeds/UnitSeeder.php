<?php

use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'unit_type' => 'kilograms',
                'description' => 'English Weight unit'
            ],
            [
                'unit_type' => 'pieces',
                'description' => 'Piece by piece items'
            ],
            [
                'unit_type' => 'bottles',
                'description' => 'unit for bottled beverages'
            ],
            [
                'unit_type' => 'dozens',
                'description' => 'Units of groups of twelve'
            ],
            [
                'unit_type' => 'bunch',
                'description' => 'Unit of items in bunch'
            ],
        ];

        foreach($data as $d) {
            \App\Unit::create($d);
        }
    }
}
