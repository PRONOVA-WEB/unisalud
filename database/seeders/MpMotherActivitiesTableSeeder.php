<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MpMotherActivitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('mp_mother_activities')->delete();

        \DB::table('mp_mother_activities')->insert(array (
            0 =>
            array (
                'id' => 1,
                'description' => 'Pabellón',
                'created_at' => '2021-06-22 16:27:28',
                'updated_at' => '2021-06-22 16:27:28',
                'deleted_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'description' => 'Consulta Médica',
                'created_at' => '2021-06-22 16:27:28',
                'updated_at' => '2021-06-22 16:27:28',
                'deleted_at' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'description' => 'Consultas Telemedicina',
                'created_at' => '2021-09-13 10:30:54',
                'updated_at' => '2021-09-13 10:30:54',
                'deleted_at' => NULL,
            ),
            3 =>
            array (
                'id' => 4,
            'description' => 'Tipo clínica (C)',
                'created_at' => '2021-10-26 09:37:26',
                'updated_at' => '2021-10-26 09:42:29',
                'deleted_at' => NULL,
            ),
            4 =>
            array (
                'id' => 5,
            'description' => 'Tipo no clínica (NC)',
                'created_at' => '2021-10-26 09:37:46',
                'updated_at' => '2021-10-26 09:42:37',
                'deleted_at' => NULL,
            ),
        ));


    }
}
