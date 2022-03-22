<?php

namespace Database\Seeders;

use App\Models\Coding;
use Illuminate\Database\Seeder;

class CodingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Coding::Create(['code' => 'si', 'display' => 'Site']);
        Coding::Create(['code' => 'bu', 'display' => 'Building']);
        Coding::Create(['code' => 'wi', 'display' => 'Wing']);
        Coding::Create(['code' => 'wa', 'display' => 'Ward']);
        Coding::Create(['code' => 'lvl', 'display' => 'Level']);
        Coding::Create(['code' => 'co', 'display' => 'Corridor']);
        Coding::Create(['code' => 'ro', 'display' => 'Room']);
        Coding::Create(['code' => 'bd', 'display' => 'Bed']);
        Coding::Create(['code' => 've', 'display' => 'Vehicle']);
        Coding::Create(['code' => 'ho', 'display' => 'House']);
        Coding::Create(['code' => 'ca', 'display' => 'Cabinet']);
        Coding::Create(['code' => 'rd', 'display' => 'Road']);
        Coding::Create(['code' => 'area', 'display' => 'Area']);
        Coding::Create(['code' => 'jdn', 'display' => 'Jurisdiction']);
    }
}
