<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MpProgrammingProposalsSignatureFlowTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('mp_programming_proposals_signature_flow')->delete();

        \DB::table('mp_programming_proposals_signature_flow')->insert(array (
            0 =>
            array (
                'id' => 1,
                'programming_proposal_id' => 1,
                'user_id' => 1,
                'type' => 'Subdirección Médica',
                'sign_position' => 1,
                'signature_date' => '2022-03-21 13:58:26',
                'status' => 'Solicitud creada',
                'observation' => NULL,
                'created_at' => '2022-03-21 13:58:26',
                'updated_at' => '2022-03-21 13:58:26',
                'deleted_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'programming_proposal_id' => 2,
                'user_id' => 1,
                'type' => 'Subdirección Médica',
                'sign_position' => 1,
                'signature_date' => '2022-03-21 13:59:50',
                'status' => 'Solicitud creada',
                'observation' => NULL,
                'created_at' => '2022-03-21 13:59:51',
                'updated_at' => '2022-03-21 13:59:51',
                'deleted_at' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'programming_proposal_id' => 3,
                'user_id' => 1,
                'type' => 'Subdirección Médica',
                'sign_position' => 1,
                'signature_date' => '2022-03-21 14:01:13',
                'status' => 'Solicitud creada',
                'observation' => NULL,
                'created_at' => '2022-03-21 14:01:13',
                'updated_at' => '2022-03-21 14:01:13',
                'deleted_at' => NULL,
            ),
            3 =>
            array (
                'id' => 4,
                'programming_proposal_id' => 3,
                'user_id' => 1,
                'type' => 'Subdirección Médica',
                'sign_position' => 2,
                'signature_date' => '2022-03-21 14:03:56',
                'status' => 'Solicitud confirmada',
                'observation' => 'APROBADO',
                'created_at' => '2022-03-21 14:03:56',
                'updated_at' => '2022-03-21 14:03:56',
                'deleted_at' => NULL,
            ),
            4 =>
            array (
                'id' => 5,
                'programming_proposal_id' => 2,
                'user_id' => 1,
                'type' => 'Subdirección Médica',
                'sign_position' => 2,
                'signature_date' => '2022-03-21 14:04:32',
                'status' => 'Solicitud confirmada',
                'observation' => 'APROBADO',
                'created_at' => '2022-03-21 14:04:32',
                'updated_at' => '2022-03-21 14:04:32',
                'deleted_at' => NULL,
            ),
        ));


    }
}
