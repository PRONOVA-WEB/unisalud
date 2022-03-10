<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MpUserProfessionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('mp_user_professions')->delete();

        \DB::table('mp_user_professions')->insert(array (
            0 =>
            array (
                'user_id' => 1,
                'profession_id' => 11,
                'principal' => 0,
                'created_at' => '2022-03-09 10:14:33',
                'updated_at' => '2022-03-09 10:25:16',
                'deleted_at' => NULL,
            ),
            1 =>
            array (
                'user_id' => 1,
                'profession_id' => 1,
                'principal' => 0,
                'created_at' => '2022-03-09 10:14:33',
                'updated_at' => '2022-03-09 10:25:16',
                'deleted_at' => NULL,
            ),
            2 =>
            array (
                'user_id' => 1,
                'profession_id' => 5,
                'principal' => 0,
                'created_at' => '2022-03-09 10:14:33',
                'updated_at' => '2022-03-09 10:25:16',
                'deleted_at' => NULL,
            ),
            3 =>
            array (
                'user_id' => 1,
                'profession_id' => 4,
                'principal' => 0,
                'created_at' => '2022-03-09 10:14:33',
                'updated_at' => '2022-03-09 10:25:16',
                'deleted_at' => NULL,
            ),
            4 =>
            array (
                'user_id' => 3,
                'profession_id' => 11,
                'principal' => 1,
                'created_at' => '2022-03-09 10:25:28',
                'updated_at' => '2022-03-09 10:25:28',
                'deleted_at' => NULL,
            ),
            5 =>
            array (
                'user_id' => 3,
                'profession_id' => 1,
                'principal' => 0,
                'created_at' => '2022-03-09 10:25:28',
                'updated_at' => '2022-03-09 10:25:28',
                'deleted_at' => NULL,
            ),
        ));


    }
}
