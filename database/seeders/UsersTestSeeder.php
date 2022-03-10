<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Practitioner;
use App\Models\Address;
use App\Models\HumanName;
use App\Models\Identifier;
use Illuminate\Database\Seeder;

class UsersTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (\App::environment(['local', 'testing'])) {
            //funcionario medico para pruebas

            $user = new User();
            $user->active = 1;
            $user->given = 'María';
            $user->fathers_family = 'López';
            $user->mothers_family = 'Mendoza';
            $user->claveunica = 1;
            $user->birthday = '1980-01-01';
            $user->gender = 'female';
            $user->nationality_id = 41;
            $user->password = bcrypt('admin');
            $user->save();

            $user->givePermissionTo('Mp: user');

            $humanName = new HumanName();
            $humanName->use = 'official';
            $humanName->given = 'María';
            $humanName->fathers_family = 'López';
            $humanName->mothers_family = 'Mendoza';
            $humanName->user_id = $user->id;
            $humanName->save();

            $identifier = new Identifier();
            $identifier->use = 'official';
            $identifier->cod_con_identifier_type_id = 1; // RUN
            $identifier->value = 98765432;
            $identifier->dv = 5;
            $identifier->user_id = $user->id;
            $identifier->save();

            $address = new Address();
            $address->user_id = $user->id;
            $address->type = 'physical';
            $address->text = 'Principal';
            $address->line = 2942;
            $address->city = 'Santiago';
            $address->commune_id = 90;
            $address->region_id = 13;
            $address->country_id = 90;
            $address->save();

            $practitioner = new Practitioner();
            $practitioner->active = 1;
            $practitioner->user_id = 7;
            $practitioner->organization_id = 4;
            $practitioner->specialty_id = 7;
            $practitioner->profession_id = 12;
            $practitioner->save();

            //paciente test

            $user = new User();
            $user->active = 1;
            $user->given = 'Pastor';
            $user->fathers_family = 'Maldonado';
            $user->mothers_family = '';
            $user->claveunica = 0;
            $user->birthday = '1990-01-01';
            $user->gender = 'male';
            $user->nationality_id = 41;
            $user->password = bcrypt('admin');
            $user->save();

            $humanName = new HumanName();
            $humanName->use = 'official';
            $humanName->given = 'Pastor';
            $humanName->fathers_family = 'Maldonado';
            $humanName->mothers_family = '';
            $humanName->user_id = $user->id;
            $humanName->save();

            $identifier = new Identifier();
            $identifier->use = 'official';
            $identifier->cod_con_identifier_type_id = 1; // RUN
            $identifier->value = 33333333;
            $identifier->dv = 3;
            $identifier->user_id = $user->id;
            $identifier->save();

            $address = new Address();
            $address->user_id = $user->id;
            $address->type = 'physical';
            $address->text = 'Oste';
            $address->line = 122;
            $address->city = 'Santiago';
            $address->commune_id = 90;
            $address->region_id = 13;
            $address->country_id = 90;
            $address->save();
        }
    }
}
