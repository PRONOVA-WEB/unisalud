<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MpActivityTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('mp_activity_types')->delete();

        \DB::table('mp_activity_types')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Actividad médica',
                'created_at' => '2021-06-22 16:27:28',
                'updated_at' => '2021-06-22 16:27:28',
                'deleted_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Actividad no médica',
                'created_at' => '2021-06-22 16:27:29',
                'updated_at' => '2021-06-22 16:27:29',
                'deleted_at' => NULL,
            ),
        ));


    }
}
