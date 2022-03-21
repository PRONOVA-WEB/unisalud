<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MpProgrammingProposalsDetailTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('mp_programming_proposals_detail')->delete();

        \DB::table('mp_programming_proposals_detail')->insert(array (
            0 =>
            array (
                'id' => 1,
                'programming_proposal_id' => 1,
                'activity_id' => 2,
                'sub_activity_id' => 139,
                'day' => 1,
                'start_hour' => '10:00',
                'end_hour' => '18:00',
                'created_at' => '2022-03-21 13:58:50',
                'updated_at' => '2022-03-21 13:58:50',
                'deleted_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'programming_proposal_id' => 1,
                'activity_id' => 26,
                'sub_activity_id' => 154,
                'day' => 5,
                'start_hour' => '14:00',
                'end_hour' => '15:00',
                'created_at' => '2022-03-21 13:59:14',
                'updated_at' => '2022-03-21 13:59:14',
                'deleted_at' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'programming_proposal_id' => 2,
                'activity_id' => 2,
                'sub_activity_id' => 70,
                'day' => 1,
                'start_hour' => '10:00',
                'end_hour' => '18:00',
                'created_at' => '2022-03-21 14:00:27',
                'updated_at' => '2022-03-21 14:00:27',
                'deleted_at' => NULL,
            ),
            3 =>
            array (
                'id' => 4,
                'programming_proposal_id' => 2,
                'activity_id' => 23,
                'sub_activity_id' => 443,
                'day' => 4,
                'start_hour' => '14:00',
                'end_hour' => '16:00',
                'created_at' => '2022-03-21 14:00:43',
                'updated_at' => '2022-03-21 14:00:43',
                'deleted_at' => NULL,
            ),
            4 =>
            array (
                'id' => 5,
                'programming_proposal_id' => 3,
                'activity_id' => 2,
                'sub_activity_id' => 139,
                'day' => 3,
                'start_hour' => '12:00',
                'end_hour' => '16:00',
                'created_at' => '2022-03-21 14:01:34',
                'updated_at' => '2022-03-21 14:01:34',
                'deleted_at' => NULL,
            ),
            5 =>
            array (
                'id' => 6,
                'programming_proposal_id' => 3,
                'activity_id' => 10,
                'sub_activity_id' => 161,
                'day' => 5,
                'start_hour' => '07:00',
                'end_hour' => '09:00',
                'created_at' => '2022-03-21 14:01:52',
                'updated_at' => '2022-03-21 14:01:52',
                'deleted_at' => NULL,
            ),
        ));


    }
}
