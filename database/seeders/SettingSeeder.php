<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('settings')->delete();

        \DB::table('settings')->insert(array(
            0 =>
            array(
                'id' => 1,
                'key' => 'site.title',
                'display_name' => 'Título del sitio',
                'value' => 'Programador Médico',
                'details' => '',
                'type' => 'text',
                'order' => 1,
            ),
            1 =>
            array(
                'id' => 2,
                'key' => 'site.logo',
                'display_name' => 'Logo del sitio',
                'value' => '/images/logo_pronova.jpg',
                'details' => '',
                'type' => 'image',
                'order' => 2,
            ),
            2 =>
            array(
                'id' => 3,
                'key' => 'site.description',
                'display_name' => 'Descripción del sitio',
                'value' => '<h2>Programador Médico</h2>',
                'details' => '',
                'type' => 'rich_text_box',
                'order' => 3,
            ),
            3 =>
            array(
                'id' => 4,
                'key' => 'site.phrase_day',
                'display_name' => 'Frase del día',
                'value' => 'Hoy es el día',
                'details' => '',
                'type' => 'text',
                'order' => 4,
            ),
            4 =>
            array(
                'id' => 5,
                'key' => 'site.organization',
                'display_name' => 'Nombre de la organización',
                'value' => 'Organización',
                'details' => 'Nombre de la organización',
                'type' => 'text',
                'order' => 5,
            ),
            5 =>
            array(
                'id' => 6,
                'key' => 'site.phone',
                'display_name' => 'Teléfono de contacto',
                'value' => '+56 999999999',
                'details' => 'Teléfono de contacto',
                'type' => 'text',
                'order' => 6,
            )
        ));
    }
}
