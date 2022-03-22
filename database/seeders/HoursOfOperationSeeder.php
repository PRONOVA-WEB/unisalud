<?php

namespace Database\Seeders;

use App\Models\HourOfOperation;
use Illuminate\Database\Seeder;

class HoursOfOperationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('hours_of_operation')->delete();
        \DB::table('hours_of_operation')->insert(array(
            0 =>
            array(
                'daysOfWeek' => 'mon',
                'allDay' => false,
                'openingTime' => '08:00:00',
                'closingTime' => '17:00:00',
                'created_at'  => now(),
                'updated_at'  => now(),
            ),
            1 =>
            array(
                'daysOfWeek' => 'tue',
                'allDay' => false,
                'openingTime' => '08:00:00',
                'closingTime' => '17:00:00',
                'created_at'  => now(),
                'updated_at'  => now(),
            ),
            2 =>
            array(
                'daysOfWeek' => 'wed',
                'allDay' => false,
                'openingTime' => '08:00:00',
                'closingTime' => '17:00:00',
                'created_at'  => now(),
                'updated_at'  => now(),
            ),
            3 =>
            array(
                'daysOfWeek' => 'thu',
                'allDay' => false,
                'openingTime' => '08:00:00',
                'closingTime' => '17:00:00',
                'created_at'  => now(),
                'updated_at'  => now(),
            ),
            4 =>
            array(
                'daysOfWeek' => 'fri',
                'allDay' => false,
                'openingTime' => '08:00:00',
                'closingTime' => '11:00:00',
                'created_at'  => now(),
                'updated_at'  => now(),
            )
        ));
    }
}
