<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Location::Create(['status' => 'active',
        'name' => 'Pabellón Quirúrgico 1',
        'alias' => 'Pabellón Quirúrgico 1',
        'description' => 'Pabellón Quirúrgico 1',
        'mode' => 'Instance',
        'organization_id' => 1,
        'cod_con_physical_type_id' => '5'
        ]);

        Location::Create(['status' => 'active',
        'name' => 'Pabellón Quirúrgico 2',
        'alias' => 'Pabellón Quirúrgico 2',
        'description' => 'Pabellón Quirúrgico 2',
        'mode' => 'Instance',
        'organization_id' => 1,
        'cod_con_physical_type_id' => '5'
        ]);

        Location::Create(['status' => 'active',
        'name' => 'Pabellón General',
        'alias' => 'Pabellón General',
        'description' => 'Pabellón General',
        'mode' => 'Instance',
        'organization_id' => 1,
        'cod_con_physical_type_id' => '5'
        ]);


        Location::Create(['status' => 'inactive',
            'name' => 'Pasillo Verde',
            'alias' => 'Pasillo Verde',
            'description' => 'Pasillo Verde Hospital',
            'mode' => 'Instance', //The Location resource represents a specific instance of a location (e.g. Operating Theatre 1A).
            'organization_id' => 1,
        ]);

        Location::Create(['status' => 'active',
            'name' => 'Pasillo Rojo',
            'alias' => 'Pasillo Rojo',
            'description' => 'Pasillo Rojo Hospital',
            'mode' => 'Instance', //The Location resource represents a specific instance of a location (e.g. Operating Theatre 1A).
            'organization_id' => 1,
        ]);

        Location::Create(['status' => 'active',
        'name' => 'Box General 1',
        'alias' => 'Box General',
        'description' => 'Box General',
        'mode' => 'Instance',
        'organization_id' => 1,
        'cod_con_physical_type_id' => '1'
        ]);

        Location::Create(['status' => 'active',
        'name' => 'Box General 2',
        'alias' => 'Box General',
        'description' => 'Box General',
        'mode' => 'Instance',
        'organization_id' => 1,
        'cod_con_physical_type_id' => '1'
        ]);

        Location::Create(['status' => 'active',
        'name' => 'Box de Cardiología 1',
        'alias' => 'Box de Cardiología',
        'description' => 'Box de Cardiología',
        'mode' => 'Instance',
        'organization_id' => 1,
        'cod_con_physical_type_id' => '4'
        ]);

        Location::Create(['status' => 'active',
        'name' => 'Box de Cardiología 2',
        'alias' => 'Box de Cardiología',
        'description' => 'Box de Cardiología',
        'mode' => 'Instance',
        'organization_id' => 1,
        'cod_con_physical_type_id' => '4'
        ]);

        Location::Create(['status' => 'active',
        'name' => 'Box de Ginecología 1',
        'alias' => 'Box de Ginecología',
        'description' => 'Box de Ginecología',
        'mode' => 'Instance',
        'organization_id' => 1,
        'cod_con_physical_type_id' => '2'
        ]);

        Location::Create(['status' => 'active',
        'name' => 'Box de Ginecología 2',
        'alias' => 'Box de Ginecología',
        'description' => 'Box de Ginecología',
        'mode' => 'Instance',
        'organization_id' => 1,
        'cod_con_physical_type_id' => '2'
        ]);
    }
}
