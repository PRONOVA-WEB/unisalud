<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MpProgrammingProposalsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('mp_programming_proposals')->delete();

        \DB::table('mp_programming_proposals')->insert(array (
            0 =>
            array (
                'id' => 1,
                'type' => 'Nuevo horario',
                'user_id' => 7,
                'contract_id' => 2,
                'specialty_id' => 7,
                'profession_id' => NULL,
                'request_date' => '2022-03-21 13:58:26',
                'start_date' => '2022-01-01 00:00:00',
                'end_date' => '2022-01-01 00:00:00',
                'status' => 'Creado',
                'observation' => 'TEST',
                'created_at' => '2022-03-21 13:58:26',
                'updated_at' => '2022-03-21 14:00:02',
                'deleted_at' => '2022-03-21 14:00:02',
            ),
            1 =>
            array (
                'id' => 2,
                'type' => 'Nuevo horario',
                'user_id' => 8,
                'contract_id' => 1,
                'specialty_id' => 1,
                'profession_id' => NULL,
                'request_date' => '2022-03-21 13:59:50',
                'start_date' => '2022-01-01 00:00:00',
                'end_date' => '2022-12-31 00:00:00',
                'status' => 'Confirmado',
                'observation' => 'TEST',
                'created_at' => '2022-03-21 13:59:50',
                'updated_at' => '2022-03-21 14:04:32',
                'deleted_at' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'type' => 'Nuevo horario',
                'user_id' => 7,
                'contract_id' => 2,
                'specialty_id' => 7,
                'profession_id' => NULL,
                'request_date' => '2022-03-21 14:01:13',
                'start_date' => '2022-01-01 00:00:00',
                'end_date' => '2022-12-31 00:00:00',
                'status' => 'Confirmado',
                'observation' => 'TEST',
                'created_at' => '2022-03-21 14:01:13',
                'updated_at' => '2022-03-21 14:03:56',
                'deleted_at' => NULL,
            ),
        ));


    }
}
