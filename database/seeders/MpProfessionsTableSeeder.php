<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MpProfessionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('mp_professions')->delete();

        \DB::table('mp_professions')->insert(array (
            0 =>
            array (
                'id' => 1,
                'id_profession' => 2,
                'profession_name' => 'ENFERMERA',
                'color' => '1D19FF',
                'created_at' => '2021-06-22 16:42:12',
                'updated_at' => '2021-06-22 16:42:12',
                'deleted_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'id_profession' => 3,
                'profession_name' => 'MATRONA',
                'color' => 'FF0F1B',
                'created_at' => '2021-06-22 16:42:12',
                'updated_at' => '2021-06-22 16:42:12',
                'deleted_at' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'id_profession' => 4,
                'profession_name' => 'NUTRICIONISTA',
                'color' => 'C68AFF',
                'created_at' => '2021-06-22 16:42:12',
                'updated_at' => '2021-06-22 16:42:12',
                'deleted_at' => NULL,
            ),
            3 =>
            array (
                'id' => 4,
                'id_profession' => 5,
                'profession_name' => 'KINESIOLOGO',
                'color' => '292429',
                'created_at' => '2021-06-22 16:42:13',
                'updated_at' => '2021-06-22 16:42:13',
                'deleted_at' => NULL,
            ),
            4 =>
            array (
                'id' => 5,
                'id_profession' => 6,
                'profession_name' => 'FONOAUDIOLOGO',
                'color' => '52FF66',
                'created_at' => '2021-06-22 16:42:13',
                'updated_at' => '2021-06-22 16:42:13',
                'deleted_at' => NULL,
            ),
            5 =>
            array (
                'id' => 6,
                'id_profession' => 7,
                'profession_name' => 'PSICOLOGO',
                'color' => 'FCFF38',
                'created_at' => '2021-06-22 16:42:13',
                'updated_at' => '2021-06-22 16:42:13',
                'deleted_at' => NULL,
            ),
            6 =>
            array (
                'id' => 7,
                'id_profession' => 8,
                'profession_name' => 'TERAPEUTA_OCUPACIONAL',
                'color' => '8CFF9A',
                'created_at' => '2021-06-22 16:42:14',
                'updated_at' => '2021-06-22 16:42:14',
                'deleted_at' => NULL,
            ),
            7 =>
            array (
                'id' => 8,
                'id_profession' => 9,
                'profession_name' => 'TRABAJO_SOCIAL',
                'color' => '8E8E94',
                'created_at' => '2021-06-22 16:42:14',
                'updated_at' => '2021-10-27 08:22:32',
                'deleted_at' => NULL,
            ),
            8 =>
            array (
                'id' => 9,
                'id_profession' => 10,
                'profession_name' => 'TECNOLOGO_MEDICO',
                'color' => 'B326FF',
                'created_at' => '2021-06-22 16:42:14',
                'updated_at' => '2021-06-22 16:42:14',
                'deleted_at' => NULL,
            ),
            9 =>
            array (
                'id' => 10,
                'id_profession' => 11,
                'profession_name' => 'QUIMICO_FARMACEUTICO',
                'color' => 'FF5714',
                'created_at' => '2021-06-22 16:42:15',
                'updated_at' => '2021-06-22 16:42:15',
                'deleted_at' => NULL,
            ),
            10 =>
            array (
                'id' => 11,
                'id_profession' => 12,
                'profession_name' => 'BIOQUIMICO',
                'color' => 'EDFFFF',
                'created_at' => '2021-06-22 16:42:15',
                'updated_at' => '2021-06-22 16:42:15',
                'deleted_at' => NULL,
            ),
            11 =>
            array (
                'id' => 12,
                'id_profession' => 13,
                'profession_name' => 'MÉDICO',
                'color' => '007BFF',
                'created_at' => '2021-06-29 13:06:15',
                'updated_at' => '2021-06-29 13:06:15',
                'deleted_at' => NULL,
            ),
        ));


    }
}
