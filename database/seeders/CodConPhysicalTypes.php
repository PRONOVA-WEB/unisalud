<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;

class CodConPhysicalTypes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('cod_con_physical_types')->insert(array(
            0 =>
            array(
                'id' => 1,
                'coding_id' => 7,
                'text' => 'Box General'
            ),
        ));
        \DB::table('cod_con_physical_types')->insert(array(
            1 =>
            array(
                'id' => 2,
                'coding_id' => 7,
                'text' => 'Box Ginecológico'
            ),
        ));
        \DB::table('cod_con_physical_types')->insert(array(
            2 =>
            array(
                'id' => 3,
                'coding_id' => 7,
                'text' => 'Box Odontológico'
            ),
        ));
        \DB::table('cod_con_physical_types')->insert(array(
            3 =>
            array(
                'id' => 4,
                'coding_id' => 7,
                'text' => 'Box Cardiológico'
            ),
        ));
        \DB::table('cod_con_physical_types')->insert(array(
            4 =>
            array(
                'id' => 5,
                'coding_id' => 6,
                'text' => 'Pabellón'
            ),
        ));
    }
}
