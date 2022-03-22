<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MpContractsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('mp_contracts')->delete();

        \DB::table('mp_contracts')->insert(array (
            0 =>
            array (
                'id' => 1,
                'user_id' => 8,
                'service_id' => 41,
                'law' => 'LEY 18.834',
                'contract_id' => 10,
                'weekly_hours' => 20,
                'shift_system' => 'S',
                'obs' => NULL,
                'legal_holidays' => NULL,
                'compensatory_rest' => NULL,
                'administrative_permit' => NULL,
                'training_days' => NULL,
                'breastfeeding_time' => NULL,
                'weekly_collation' => NULL,
                'contract_start_date' => '2022-01-01',
                'contract_end_date' => '2022-12-01',
                'unit' => NULL,
                'unit_code' => NULL,
                'year' => 2022,
                'created_at' => '2022-03-21 13:56:20',
                'updated_at' => '2022-03-21 13:56:38',
                'deleted_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'user_id' => 7,
                'service_id' => 17,
                'law' => 'LEY 19.664',
                'contract_id' => NULL,
                'weekly_hours' => 44,
                'shift_system' => NULL,
                'obs' => NULL,
                'legal_holidays' => NULL,
                'compensatory_rest' => NULL,
                'administrative_permit' => NULL,
                'training_days' => NULL,
                'breastfeeding_time' => NULL,
                'weekly_collation' => NULL,
                'contract_start_date' => '2022-01-01',
                'contract_end_date' => '2022-12-01',
                'unit' => NULL,
                'unit_code' => NULL,
                'year' => 2022,
                'created_at' => '2022-03-21 13:57:07',
                'updated_at' => '2022-03-21 13:57:07',
                'deleted_at' => NULL,
            ),
        ));


    }
}
