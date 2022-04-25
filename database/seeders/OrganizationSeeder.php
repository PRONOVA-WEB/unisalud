<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Organization;
use App\Models\Address;


class OrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


Organization::Create(['name' => 'Clínica 1','alias'=>'Clínica 1','type'=>1,'code_deis' =>103010,'service' =>5,'dependency' =>1]);
Organization::Create(['name' => 'Clínica 2','alias'=>'Clínica 2','type'=>2,'code_deis' =>103011,'service' =>5,'dependency' =>1]);

    }
}
