<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Samu\Establishment;

class SamuEstablishmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Establishment::create(['organization_id' => 1]);
        Establishment::create(['organization_id' => 2]);
    }
}
