<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LocationHourOfOperationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('location_hour_of_operation')->delete();
        \DB::table('location_hour_of_operation')->insert(array(
            0 =>
            array(
                'id' => 1,
                'hours_of_operation_id' => 3,
                'location_id' => 3
            ),
            1 =>
            array(
                'id' => 2,
                'hours_of_operation_id' => 1,
                'location_id' => 4
            ),
            2 =>
            array(
                'id' => 3,
                'hours_of_operation_id' => 1,
                'location_id' => 5
            ),
            array(
                'id' => 4,
                'hours_of_operation_id' => 2,
                'location_id' => 5
            ),
        ));
    }
}
