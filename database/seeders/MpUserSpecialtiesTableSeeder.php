<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MpUserSpecialtiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('mp_user_specialties')->delete();

        \DB::table('mp_user_specialties')->insert(array (
            0 =>
            array (
                'user_id' => 1,
                'specialty_id' => 62,
                'principal' => 1,
                'created_at' => '2022-03-09 10:14:33',
                'updated_at' => '2022-03-09 10:25:16',
                'deleted_at' => NULL,
            ),
            1 =>
            array (
                'user_id' => 1,
                'specialty_id' => 44,
                'principal' => 0,
                'created_at' => '2022-03-09 10:14:33',
                'updated_at' => '2022-03-09 10:25:16',
                'deleted_at' => NULL,
            ),
            2 =>
            array (
                'user_id' => 1,
                'specialty_id' => 7,
                'principal' => 0,
                'created_at' => '2022-03-09 10:14:33',
                'updated_at' => '2022-03-09 10:25:16',
                'deleted_at' => NULL,
            ),
            3 =>
            array (
                'user_id' => 1,
                'specialty_id' => 6,
                'principal' => 0,
                'created_at' => '2022-03-09 10:14:33',
                'updated_at' => '2022-03-09 10:25:16',
                'deleted_at' => NULL,
            ),
            4 =>
            array (
                'user_id' => 1,
                'specialty_id' => 43,
                'principal' => 0,
                'created_at' => '2022-03-09 10:14:33',
                'updated_at' => '2022-03-09 10:25:16',
                'deleted_at' => NULL,
            ),
            5 =>
            array (
                'user_id' => 1,
                'specialty_id' => 36,
                'principal' => 0,
                'created_at' => '2022-03-09 10:14:33',
                'updated_at' => '2022-03-09 10:25:16',
                'deleted_at' => NULL,
            ),
            6 =>
            array (
                'user_id' => 3,
                'specialty_id' => 62,
                'principal' => 1,
                'created_at' => '2022-03-09 10:25:28',
                'updated_at' => '2022-03-09 10:25:28',
                'deleted_at' => NULL,
            ),
            7 =>
            array (
                'user_id' => 3,
                'specialty_id' => 44,
                'principal' => 0,
                'created_at' => '2022-03-09 10:25:28',
                'updated_at' => '2022-03-09 10:25:28',
                'deleted_at' => NULL,
            ),
        ));


    }
}
