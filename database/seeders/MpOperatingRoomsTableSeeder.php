<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MpOperatingRoomsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('mp_operating_rooms')->delete();

        \DB::table('mp_operating_rooms')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'PC1',
                'description' => 'Pabellón Cirugia 1',
                'location' => 'HETG',
                'color' => 'AB2567',
                'medic_box' => 0,
                'created_at' => '2021-06-22 16:46:56',
                'updated_at' => '2021-06-22 16:46:56',
                'deleted_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'PC2',
                'description' => 'Pabellón Cirugia 2',
                'location' => 'HETG',
                'color' => 'AB1212',
                'medic_box' => 0,
                'created_at' => '2021-06-22 16:46:57',
                'updated_at' => '2021-06-22 16:46:57',
                'deleted_at' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'PC3',
                'description' => 'Pabellón Cirugia 3',
                'location' => 'HETG',
                'color' => '0D1AAB',
                'medic_box' => 0,
                'created_at' => '2021-06-22 16:46:57',
                'updated_at' => '2021-06-22 16:46:57',
                'deleted_at' => NULL,
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'PC4',
                'description' => 'Pabellón Cirugia 4',
                'location' => 'HETG',
                'color' => '6C97AB',
                'medic_box' => 0,
                'created_at' => '2021-06-22 16:46:57',
                'updated_at' => '2021-06-22 16:46:57',
                'deleted_at' => NULL,
            ),
            4 =>
            array (
                'id' => 5,
                'name' => 'PC5',
                'description' => 'Pabellón Cirugia 5',
                'location' => 'HETG',
                'color' => '11AB0E',
                'medic_box' => 0,
                'created_at' => '2021-06-22 16:46:58',
                'updated_at' => '2021-06-22 16:46:58',
                'deleted_at' => NULL,
            ),
            5 =>
            array (
                'id' => 6,
                'name' => 'PC6',
                'description' => 'Pabellón Cirugia 6',
                'location' => 'HETG',
                'color' => 'AB586F',
                'medic_box' => 0,
                'created_at' => '2021-06-22 16:46:58',
                'updated_at' => '2021-06-22 16:46:58',
                'deleted_at' => NULL,
            ),
            6 =>
            array (
                'id' => 7,
                'name' => 'PC7',
                'description' => 'Pabellón Cirugia 7',
                'location' => 'HETG',
                'color' => 'A5AB37',
                'medic_box' => 0,
                'created_at' => '2021-06-22 16:46:58',
                'updated_at' => '2021-06-22 16:46:58',
                'deleted_at' => NULL,
            ),
            7 =>
            array (
                'id' => 8,
                'name' => 'PC8',
                'description' => 'Pabellón Cirugia 8',
                'location' => 'HETG',
                'color' => 'AB998F',
                'medic_box' => 0,
                'created_at' => '2021-06-22 16:46:59',
                'updated_at' => '2021-06-22 16:46:59',
                'deleted_at' => NULL,
            ),
            8 =>
            array (
                'id' => 9,
                'name' => 'Box1',
                'description' => 'Box1',
                'location' => 'HETG',
                'color' => 'AB998F',
                'medic_box' => 1,
                'created_at' => '2021-06-22 16:46:59',
                'updated_at' => '2021-06-22 16:46:59',
                'deleted_at' => NULL,
            ),
            9 =>
            array (
                'id' => 10,
                'name' => 'Box2',
                'description' => 'Box2',
                'location' => 'HETG',
                'color' => 'AB998F',
                'medic_box' => 1,
                'created_at' => '2021-06-22 16:46:59',
                'updated_at' => '2021-06-22 16:46:59',
                'deleted_at' => NULL,
            ),
            10 =>
            array (
                'id' => 11,
                'name' => 'Box3',
                'description' => 'Box3',
                'location' => 'HETG',
                'color' => 'AB998F',
                'medic_box' => 1,
                'created_at' => '2021-06-22 16:47:00',
                'updated_at' => '2021-06-22 16:47:00',
                'deleted_at' => NULL,
            ),
            11 =>
            array (
                'id' => 12,
                'name' => 'Box4',
                'description' => 'Box4',
                'location' => 'HETG',
                'color' => 'AB998F',
                'medic_box' => 1,
                'created_at' => '2021-06-22 16:47:00',
                'updated_at' => '2021-06-22 16:47:00',
                'deleted_at' => NULL,
            ),
            12 =>
            array (
                'id' => 13,
                'name' => 'Box5',
                'description' => 'Box5',
                'location' => 'HETG',
                'color' => 'AB998F',
                'medic_box' => 1,
                'created_at' => '2021-06-22 16:47:01',
                'updated_at' => '2021-06-22 16:47:01',
                'deleted_at' => NULL,
            ),
            13 =>
            array (
                'id' => 14,
                'name' => 'Box6',
                'description' => 'Box6',
                'location' => 'HETG',
                'color' => 'AB998F',
                'medic_box' => 1,
                'created_at' => '2021-06-22 16:47:01',
                'updated_at' => '2021-06-22 16:47:01',
                'deleted_at' => NULL,
            ),
            14 =>
            array (
                'id' => 15,
                'name' => 'Box7',
                'description' => 'Box7',
                'location' => 'HETG',
                'color' => 'AB998F',
                'medic_box' => 1,
                'created_at' => '2021-06-22 16:47:01',
                'updated_at' => '2021-06-22 16:47:01',
                'deleted_at' => NULL,
            ),
            15 =>
            array (
                'id' => 16,
                'name' => 'Box8',
                'description' => 'Box8',
                'location' => 'HETG',
                'color' => 'AB998F',
                'medic_box' => 1,
                'created_at' => '2021-06-22 16:47:02',
                'updated_at' => '2021-06-22 16:47:02',
                'deleted_at' => NULL,
            ),
            16 =>
            array (
                'id' => 17,
                'name' => 'Box9',
                'description' => 'Box9',
                'location' => 'HETG',
                'color' => 'AB998F',
                'medic_box' => 1,
                'created_at' => '2021-06-22 16:47:02',
                'updated_at' => '2021-06-22 16:47:02',
                'deleted_at' => NULL,
            ),
            17 =>
            array (
                'id' => 18,
                'name' => 'Box10',
                'description' => 'Box10',
                'location' => 'HETG',
                'color' => 'AB998F',
                'medic_box' => 1,
                'created_at' => '2021-06-22 16:47:02',
                'updated_at' => '2021-06-22 16:47:02',
                'deleted_at' => NULL,
            ),
            18 =>
            array (
                'id' => 19,
                'name' => 'Box11',
                'description' => 'Box11',
                'location' => 'HETG',
                'color' => 'AB998F',
                'medic_box' => 1,
                'created_at' => '2021-06-22 16:47:03',
                'updated_at' => '2021-06-22 16:47:03',
                'deleted_at' => NULL,
            ),
            19 =>
            array (
                'id' => 20,
                'name' => 'Box12',
                'description' => 'Box12',
                'location' => 'HETG',
                'color' => 'AB998F',
                'medic_box' => 1,
                'created_at' => '2021-06-22 16:47:03',
                'updated_at' => '2021-06-22 16:47:03',
                'deleted_at' => NULL,
            ),
            20 =>
            array (
                'id' => 21,
                'name' => 'Box13',
                'description' => 'Box13',
                'location' => 'HETG',
                'color' => 'AB998F',
                'medic_box' => 1,
                'created_at' => '2021-06-22 16:47:03',
                'updated_at' => '2021-06-22 16:47:03',
                'deleted_at' => NULL,
            ),
            21 =>
            array (
                'id' => 22,
                'name' => 'Box14',
                'description' => 'Box14',
                'location' => 'HETG',
                'color' => 'AB998F',
                'medic_box' => 1,
                'created_at' => '2021-06-22 16:47:04',
                'updated_at' => '2021-06-22 16:47:04',
                'deleted_at' => NULL,
            ),
            22 =>
            array (
                'id' => 23,
                'name' => 'Box15',
                'description' => 'Box15',
                'location' => 'HETG',
                'color' => 'AB998F',
                'medic_box' => 1,
                'created_at' => '2021-06-22 16:47:04',
                'updated_at' => '2021-06-22 16:47:04',
                'deleted_at' => NULL,
            ),
            23 =>
            array (
                'id' => 24,
                'name' => 'Box16',
                'description' => 'Box16',
                'location' => 'HETG',
                'color' => 'AB998F',
                'medic_box' => 1,
                'created_at' => '2021-06-22 16:47:04',
                'updated_at' => '2021-06-22 16:47:04',
                'deleted_at' => NULL,
            ),
            24 =>
            array (
                'id' => 25,
                'name' => 'Box17',
                'description' => 'Box17',
                'location' => 'HETG',
                'color' => 'AB998F',
                'medic_box' => 1,
                'created_at' => '2021-06-22 16:47:05',
                'updated_at' => '2021-06-22 16:47:05',
                'deleted_at' => NULL,
            ),
            25 =>
            array (
                'id' => 26,
                'name' => 'Box18',
                'description' => 'Box18',
                'location' => 'HETG',
                'color' => 'AB998F',
                'medic_box' => 1,
                'created_at' => '2021-06-22 16:47:05',
                'updated_at' => '2021-06-22 16:47:05',
                'deleted_at' => NULL,
            ),
            26 =>
            array (
                'id' => 27,
                'name' => 'Box19',
                'description' => 'Box19',
                'location' => 'HETG',
                'color' => 'AB998F',
                'medic_box' => 1,
                'created_at' => '2021-06-22 16:47:06',
                'updated_at' => '2021-06-22 16:47:06',
                'deleted_at' => NULL,
            ),
            27 =>
            array (
                'id' => 28,
                'name' => 'Box20',
                'description' => 'Box20',
                'location' => 'HETG',
                'color' => 'AB998F',
                'medic_box' => 1,
                'created_at' => '2021-06-22 16:47:06',
                'updated_at' => '2021-06-22 16:47:06',
                'deleted_at' => NULL,
            ),
        ));


    }
}
