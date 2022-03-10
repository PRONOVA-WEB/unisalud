<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MpSpecialtiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('mp_specialties')->delete();

        \DB::table('mp_specialties')->insert(array (
            0 =>
            array (
                'id' => 1,
                'id_specialty' => 7020130,
                'id_sigte' => NULL,
                'specialty_name' => 'PEDIATRÍA',
                'color' => 'CBFFBF',
                'created_at' => '2021-06-22 16:28:22',
                'updated_at' => '2021-06-22 16:28:22',
                'deleted_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'id_specialty' => 7020230,
                'id_sigte' => NULL,
                'specialty_name' => 'MEDICINA INTERNA',
                'color' => '0004FF',
                'created_at' => '2021-06-22 16:28:23',
                'updated_at' => '2021-06-22 16:28:23',
                'deleted_at' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'id_specialty' => 7020330,
                'id_sigte' => NULL,
                'specialty_name' => 'NEONATOLOGÍA',
                'color' => '52FFF1',
                'created_at' => '2021-06-22 16:28:23',
                'updated_at' => '2021-06-22 16:28:23',
                'deleted_at' => NULL,
            ),
            3 =>
            array (
                'id' => 4,
                'id_specialty' => 7020331,
                'id_sigte' => NULL,
            'specialty_name' => 'ENFERMEDAD RESPIRATORIA PEDIÁTRICA (BRONCOPULMONAR INFANTIL)',
                'color' => 'FFFFFF',
                'created_at' => '2021-06-22 16:28:23',
                'updated_at' => '2021-06-22 16:28:23',
                'deleted_at' => NULL,
            ),
            4 =>
            array (
                'id' => 5,
                'id_specialty' => 7020332,
                'id_sigte' => NULL,
            'specialty_name' => 'ENFERMEDAD RESPIRATORIA DE ADULTO (BRONCOPULMONAR)',
                'color' => '3526FF',
                'created_at' => '2021-06-22 16:28:24',
                'updated_at' => '2021-06-22 16:28:24',
                'deleted_at' => NULL,
            ),
            5 =>
            array (
                'id' => 6,
                'id_specialty' => 7024219,
                'id_sigte' => NULL,
                'specialty_name' => 'CARDIOLOGÍA PEDIÁTRICA',
                'color' => 'F58EFF',
                'created_at' => '2021-06-22 16:28:24',
                'updated_at' => '2021-06-22 16:28:24',
                'deleted_at' => NULL,
            ),
            6 =>
            array (
                'id' => 7,
                'id_specialty' => 7020500,
                'id_sigte' => NULL,
                'specialty_name' => 'CARDIOLOGÍA ADULTO',
                'color' => 'BAFFD2',
                'created_at' => '2021-06-22 16:28:24',
                'updated_at' => '2021-06-22 16:28:24',
                'deleted_at' => NULL,
            ),
            7 =>
            array (
                'id' => 8,
                'id_specialty' => 7020501,
                'id_sigte' => NULL,
                'specialty_name' => 'ENDOCRINOLOGÍA PEDIÁTRICA',
                'color' => 'FF2B59',
                'created_at' => '2021-06-22 16:28:25',
                'updated_at' => '2021-06-22 16:28:25',
                'deleted_at' => NULL,
            ),
            8 =>
            array (
                'id' => 9,
                'id_specialty' => 7020600,
                'id_sigte' => NULL,
                'specialty_name' => 'ENDOCRINOLOGÍA ADULTO',
                'color' => '42FF49',
                'created_at' => '2021-06-22 16:28:25',
                'updated_at' => '2021-06-22 16:28:25',
                'deleted_at' => NULL,
            ),
            9 =>
            array (
                'id' => 10,
                'id_specialty' => 7020601,
                'id_sigte' => NULL,
                'specialty_name' => 'GASTROENTEROLOGÍA PEDIÁTRICA',
                'color' => 'FFC3AF',
                'created_at' => '2021-06-22 16:28:26',
                'updated_at' => '2021-06-22 16:28:26',
                'deleted_at' => NULL,
            ),
            10 =>
            array (
                'id' => 11,
                'id_specialty' => 7020700,
                'id_sigte' => NULL,
                'specialty_name' => 'GASTROENTEROLOGÍA ADULTO',
                'color' => 'D0FF9D',
                'created_at' => '2021-06-22 16:28:26',
                'updated_at' => '2021-06-22 16:28:26',
                'deleted_at' => NULL,
            ),
            11 =>
            array (
                'id' => 12,
                'id_specialty' => 7020800,
                'id_sigte' => NULL,
                'specialty_name' => 'GENÉTICA CLÍNICA',
                'color' => 'FFD0EA',
                'created_at' => '2021-06-22 16:28:26',
                'updated_at' => '2021-06-22 16:28:26',
                'deleted_at' => NULL,
            ),
            12 =>
            array (
                'id' => 13,
                'id_specialty' => 7020801,
                'id_sigte' => NULL,
                'specialty_name' => 'HEMATO-ONCOLOGÍA INFANTIL',
                'color' => 'CEFFB7',
                'created_at' => '2021-06-22 16:28:27',
                'updated_at' => '2021-06-22 16:28:27',
                'deleted_at' => NULL,
            ),
            13 =>
            array (
                'id' => 14,
                'id_specialty' => 7020900,
                'id_sigte' => NULL,
                'specialty_name' => 'HEMATOLOGÍA ADULTO',
                'color' => 'B7DCFF',
                'created_at' => '2021-06-22 16:28:27',
                'updated_at' => '2021-06-22 16:28:27',
                'deleted_at' => NULL,
            ),
            14 =>
            array (
                'id' => 15,
                'id_specialty' => 7020901,
                'id_sigte' => NULL,
                'specialty_name' => 'NEFROLOGÍA PEDIÁTRICA',
                'color' => 'F8D0FF',
                'created_at' => '2021-06-22 16:28:27',
                'updated_at' => '2021-06-22 16:28:27',
                'deleted_at' => NULL,
            ),
            15 =>
            array (
                'id' => 16,
                'id_specialty' => 7021000,
                'id_sigte' => NULL,
                'specialty_name' => 'NEFROLOGÍA ADULTO',
                'color' => 'FFD8F9',
                'created_at' => '2021-06-22 16:28:28',
                'updated_at' => '2021-06-22 16:28:28',
                'deleted_at' => NULL,
            ),
            16 =>
            array (
                'id' => 17,
                'id_specialty' => 7021001,
                'id_sigte' => NULL,
                'specialty_name' => 'NUTRIÓLOGO PEDIÁTRICO',
                'color' => 'F6FF37',
                'created_at' => '2021-06-22 16:28:28',
                'updated_at' => '2021-06-22 16:28:28',
                'deleted_at' => NULL,
            ),
            17 =>
            array (
                'id' => 18,
                'id_specialty' => 7021100,
                'id_sigte' => NULL,
                'specialty_name' => 'NUTRIÓLOGO ADULTO',
                'color' => 'FC77FF',
                'created_at' => '2021-06-22 16:28:28',
                'updated_at' => '2021-06-22 16:28:28',
                'deleted_at' => NULL,
            ),
            18 =>
            array (
                'id' => 19,
                'id_specialty' => 7021101,
                'id_sigte' => NULL,
                'specialty_name' => 'REUMATOLOGÍA PEDIÁTRICA',
                'color' => 'EDC1FF',
                'created_at' => '2021-06-22 16:28:29',
                'updated_at' => '2021-06-22 16:28:29',
                'deleted_at' => NULL,
            ),
            19 =>
            array (
                'id' => 20,
                'id_specialty' => 7021230,
                'id_sigte' => NULL,
                'specialty_name' => 'REUMATOLOGÍA ADULTO',
                'color' => 'FFFFFF',
                'created_at' => '2021-06-22 16:28:29',
                'updated_at' => '2021-06-22 16:28:29',
                'deleted_at' => NULL,
            ),
            20 =>
            array (
                'id' => 21,
                'id_specialty' => 7021300,
                'id_sigte' => NULL,
                'specialty_name' => 'DERMATOLOGÍA',
                'color' => '72FFFC',
                'created_at' => '2021-06-22 16:28:29',
                'updated_at' => '2021-06-22 16:28:29',
                'deleted_at' => NULL,
            ),
            21 =>
            array (
                'id' => 22,
                'id_specialty' => 7021301,
                'id_sigte' => NULL,
                'specialty_name' => 'INFECTOLOGÍA PEDIÁTRICA',
                'color' => 'FFB2EF',
                'created_at' => '2021-06-22 16:28:30',
                'updated_at' => '2021-06-22 16:28:30',
                'deleted_at' => NULL,
            ),
            22 =>
            array (
                'id' => 23,
                'id_specialty' => 7022000,
                'id_sigte' => NULL,
                'specialty_name' => 'INFECTOLOGÍA ADULTO',
                'color' => 'FFFCEA',
                'created_at' => '2021-06-22 16:28:30',
                'updated_at' => '2021-06-22 16:28:30',
                'deleted_at' => NULL,
            ),
            23 =>
            array (
                'id' => 24,
                'id_specialty' => 7022001,
                'id_sigte' => NULL,
                'specialty_name' => 'INMUNOLOGÍA',
                'color' => 'EAD3FF',
                'created_at' => '2021-06-22 16:28:30',
                'updated_at' => '2021-06-22 16:28:30',
                'deleted_at' => NULL,
            ),
            24 =>
            array (
                'id' => 25,
                'id_specialty' => 7021531,
                'id_sigte' => NULL,
                'specialty_name' => 'GERIATRÍA',
                'color' => 'ADFFF2',
                'created_at' => '2021-06-22 16:28:31',
                'updated_at' => '2021-06-22 16:28:31',
                'deleted_at' => NULL,
            ),
            25 =>
            array (
                'id' => 26,
                'id_specialty' => 7022132,
                'id_sigte' => NULL,
            'specialty_name' => 'MEDICINA FÍSICA Y REHABILITACIÓN PEDIÁTRICA (FISIATRÍA PEDIÁTRICA)',
                'color' => 'D8FFED',
                'created_at' => '2021-06-22 16:28:31',
                'updated_at' => '2021-06-22 16:28:31',
                'deleted_at' => NULL,
            ),
            26 =>
            array (
                'id' => 27,
                'id_specialty' => 7022133,
                'id_sigte' => NULL,
            'specialty_name' => 'MEDICINA FÍSICA Y REHABILITACIÓN ADULTO (FISIATRÍA ADULTO)',
                'color' => 'F4F4FF',
                'created_at' => '2021-06-22 16:28:31',
                'updated_at' => '2021-06-22 16:28:31',
                'deleted_at' => NULL,
            ),
            27 =>
            array (
                'id' => 28,
                'id_specialty' => 7022134,
                'id_sigte' => NULL,
                'specialty_name' => 'NEUROLOGÍA PEDIÁTRICA',
                'color' => '26FF3E',
                'created_at' => '2021-06-22 16:28:32',
                'updated_at' => '2021-06-22 16:28:32',
                'deleted_at' => NULL,
            ),
            28 =>
            array (
                'id' => 29,
                'id_specialty' => 7021700,
                'id_sigte' => NULL,
                'specialty_name' => 'NEUROLOGÍA ADULTO',
                'color' => 'D4C6FF',
                'created_at' => '2021-06-22 16:28:32',
                'updated_at' => '2021-06-22 16:28:32',
                'deleted_at' => NULL,
            ),
            29 =>
            array (
                'id' => 30,
                'id_specialty' => 7021800,
                'id_sigte' => NULL,
                'specialty_name' => 'ONCOLOGÍA MÉDICA',
                'color' => '1814FF',
                'created_at' => '2021-06-22 16:28:33',
                'updated_at' => '2021-06-22 16:28:33',
                'deleted_at' => NULL,
            ),
            30 =>
            array (
                'id' => 31,
                'id_specialty' => 7021801,
                'id_sigte' => NULL,
                'specialty_name' => 'PSIQUIATRÍA PEDIÁTRICA Y DE LA ADOLESCENCIA',
                'color' => 'F8DBFF',
                'created_at' => '2021-06-22 16:28:33',
                'updated_at' => '2021-06-22 16:28:33',
                'deleted_at' => NULL,
            ),
            31 =>
            array (
                'id' => 32,
                'id_specialty' => 7021900,
                'id_sigte' => NULL,
                'specialty_name' => 'PSIQUIATRÍA ADULTO',
                'color' => '04FF85',
                'created_at' => '2021-06-22 16:28:33',
                'updated_at' => '2021-06-22 16:28:33',
                'deleted_at' => NULL,
            ),
            32 =>
            array (
                'id' => 33,
                'id_specialty' => 7022130,
                'id_sigte' => NULL,
                'specialty_name' => 'CIRUGÍA PEDIÁTRICA',
                'color' => 'AB2567',
                'created_at' => '2021-06-22 16:28:34',
                'updated_at' => '2021-06-22 16:28:34',
                'deleted_at' => NULL,
            ),
            33 =>
            array (
                'id' => 34,
                'id_specialty' => 7022142,
                'id_sigte' => NULL,
                'specialty_name' => 'CIRUGÍA GENERAL ADULTO',
                'color' => 'D81604',
                'created_at' => '2021-06-22 16:28:34',
                'updated_at' => '2021-06-22 16:28:34',
                'deleted_at' => NULL,
            ),
            34 =>
            array (
                'id' => 35,
                'id_specialty' => 7022143,
                'id_sigte' => NULL,
            'specialty_name' => 'CIRUGÍA DIGESTIVA (ALTA)',
                'color' => 'D869C0',
                'created_at' => '2021-06-22 16:28:34',
                'updated_at' => '2021-06-22 16:28:34',
                'deleted_at' => NULL,
            ),
            35 =>
            array (
                'id' => 36,
                'id_specialty' => 7022144,
                'id_sigte' => NULL,
                'specialty_name' => 'CIRUGÍA DE CABEZA, CUELLO Y MAXILOFACIAL',
                'color' => 'D869C0',
                'created_at' => '2021-06-22 16:28:35',
                'updated_at' => '2021-06-22 16:28:35',
                'deleted_at' => NULL,
            ),
            36 =>
            array (
                'id' => 37,
                'id_specialty' => 7022135,
                'id_sigte' => NULL,
                'specialty_name' => 'CIRUGÍA PLÁSTICA Y REPARADORA PEDIÁTRICA',
                'color' => 'D869C0',
                'created_at' => '2021-06-22 16:28:35',
                'updated_at' => '2021-06-22 16:28:35',
                'deleted_at' => NULL,
            ),
            37 =>
            array (
                'id' => 38,
                'id_specialty' => 7022136,
                'id_sigte' => NULL,
                'specialty_name' => 'CIRUGÍA PLÁSTICA Y REPARADORA ADULTO',
                'color' => 'A081FF',
                'created_at' => '2021-06-22 16:28:35',
                'updated_at' => '2021-06-22 16:28:35',
                'deleted_at' => NULL,
            ),
            38 =>
            array (
                'id' => 39,
                'id_specialty' => 7022137,
                'id_sigte' => NULL,
            'specialty_name' => 'COLOPROCTOLOGÍA (CIRUGIA DIGESTIVA BAJA)',
                'color' => '89C6FF',
                'created_at' => '2021-06-22 16:28:36',
                'updated_at' => '2021-06-22 16:28:36',
                'deleted_at' => NULL,
            ),
            39 =>
            array (
                'id' => 40,
                'id_specialty' => 7022700,
                'id_sigte' => NULL,
                'specialty_name' => 'CIRUGÍA TÓRAX',
                'color' => 'FFB8A5',
                'created_at' => '2021-06-22 16:28:36',
                'updated_at' => '2021-06-22 16:28:36',
                'deleted_at' => NULL,
            ),
            40 =>
            array (
                'id' => 41,
                'id_specialty' => 7022800,
                'id_sigte' => NULL,
                'specialty_name' => 'CIRUGÍA VASCULAR PERIFÉRICA',
                'color' => 'E7FFEE',
                'created_at' => '2021-06-22 16:28:36',
                'updated_at' => '2021-06-22 16:28:36',
                'deleted_at' => NULL,
            ),
            41 =>
            array (
                'id' => 42,
                'id_specialty' => 7022900,
                'id_sigte' => NULL,
                'specialty_name' => 'NEUROCIRUGÍA',
                'color' => '218CFF',
                'created_at' => '2021-06-22 16:28:37',
                'updated_at' => '2021-06-22 16:28:37',
                'deleted_at' => NULL,
            ),
            42 =>
            array (
                'id' => 43,
                'id_specialty' => 7021701,
                'id_sigte' => NULL,
                'specialty_name' => 'CIRUGÍA CARDIOVASCULAR',
                'color' => '67FF14',
                'created_at' => '2021-06-22 16:28:37',
                'updated_at' => '2021-06-22 16:28:37',
                'deleted_at' => NULL,
            ),
            43 =>
            array (
                'id' => 44,
                'id_specialty' => 7023100,
                'id_sigte' => NULL,
                'specialty_name' => 'ANESTESIOLOGÍA',
                'color' => 'FF59F2',
                'created_at' => '2021-06-22 16:28:38',
                'updated_at' => '2021-06-22 16:28:38',
                'deleted_at' => NULL,
            ),
            44 =>
            array (
                'id' => 45,
                'id_specialty' => 7023200,
                'id_sigte' => NULL,
                'specialty_name' => 'OBSTETRICIA',
                'color' => 'B2ECFF',
                'created_at' => '2021-06-22 16:28:38',
                'updated_at' => '2021-06-22 16:28:38',
                'deleted_at' => NULL,
            ),
            45 =>
            array (
                'id' => 46,
                'id_specialty' => 7023201,
                'id_sigte' => NULL,
                'specialty_name' => 'GINECOLOGÍA PEDIÁTRICA Y DE LA ADOLESCENCIA',
                'color' => 'FFEDFA',
                'created_at' => '2021-06-22 16:28:38',
                'updated_at' => '2021-06-22 16:28:38',
                'deleted_at' => NULL,
            ),
            46 =>
            array (
                'id' => 47,
                'id_specialty' => 7023202,
                'id_sigte' => NULL,
                'specialty_name' => 'GINECOLOGÍA ADULTO',
                'color' => 'F6FF93',
                'created_at' => '2021-06-22 16:28:39',
                'updated_at' => '2021-06-22 16:28:39',
                'deleted_at' => NULL,
            ),
            47 =>
            array (
                'id' => 48,
                'id_specialty' => 7023203,
                'id_sigte' => NULL,
                'specialty_name' => 'OFTALMOLOGÍA',
                'color' => '44C6D8',
                'created_at' => '2021-06-22 16:28:39',
                'updated_at' => '2021-06-22 16:28:39',
                'deleted_at' => NULL,
            ),
            48 =>
            array (
                'id' => 49,
                'id_specialty' => 7023700,
                'id_sigte' => NULL,
                'specialty_name' => 'OTORRINOLARINGOLOGÍA',
                'color' => 'A3FFE5',
                'created_at' => '2021-06-22 16:28:39',
                'updated_at' => '2021-06-22 16:28:39',
                'deleted_at' => NULL,
            ),
            49 =>
            array (
                'id' => 50,
                'id_specialty' => 7023701,
                'id_sigte' => NULL,
                'specialty_name' => 'TRAUMATOLOGÍA Y ORTOPEDIA PEDIÁTRICA',
                'color' => 'A692D8',
                'created_at' => '2021-06-22 16:28:40',
                'updated_at' => '2021-06-22 16:28:40',
                'deleted_at' => NULL,
            ),
            50 =>
            array (
                'id' => 51,
                'id_specialty' => 7023702,
                'id_sigte' => NULL,
                'specialty_name' => 'TRAUMATOLOGÍA Y ORTOPEDIA ADULTO',
                'color' => 'D8CE03',
                'created_at' => '2021-06-22 16:28:40',
                'updated_at' => '2021-06-22 16:28:40',
                'deleted_at' => NULL,
            ),
            51 =>
            array (
                'id' => 52,
                'id_specialty' => 7023703,
                'id_sigte' => NULL,
                'specialty_name' => 'UROLOGÍA PEDIÁTRICA',
                'color' => 'FF0404',
                'created_at' => '2021-06-22 16:28:40',
                'updated_at' => '2021-06-22 16:28:40',
                'deleted_at' => NULL,
            ),
            52 =>
            array (
                'id' => 53,
                'id_specialty' => 7024000,
                'id_sigte' => NULL,
                'specialty_name' => 'UROLOGÍA ADULTO',
                'color' => '23FF70',
                'created_at' => '2021-06-22 16:28:41',
                'updated_at' => '2021-06-22 16:28:41',
                'deleted_at' => NULL,
            ),
            53 =>
            array (
                'id' => 54,
                'id_specialty' => 7024001,
                'id_sigte' => NULL,
                'specialty_name' => 'MEDICINA FAMILIAR DEL NIÑO',
                'color' => 'E3BCFF',
                'created_at' => '2021-06-22 16:28:41',
                'updated_at' => '2021-06-22 16:28:41',
                'deleted_at' => NULL,
            ),
            54 =>
            array (
                'id' => 55,
                'id_specialty' => 7024200,
                'id_sigte' => NULL,
                'specialty_name' => 'MEDICINA FAMILIAR',
                'color' => 'E9FFE0',
                'created_at' => '2021-06-22 16:28:41',
                'updated_at' => '2021-06-22 16:28:41',
                'deleted_at' => NULL,
            ),
            55 =>
            array (
                'id' => 56,
                'id_specialty' => 7030500,
                'id_sigte' => NULL,
                'specialty_name' => 'MEDICINA FAMILIAR ADULTO',
                'color' => 'FFE0F8',
                'created_at' => '2021-06-22 16:28:42',
                'updated_at' => '2021-06-22 16:28:42',
                'deleted_at' => NULL,
            ),
            56 =>
            array (
                'id' => 57,
                'id_specialty' => 7024201,
                'id_sigte' => NULL,
                'specialty_name' => 'DIABETOLOGÍA',
                'color' => 'FAA8FF',
                'created_at' => '2021-06-22 16:28:42',
                'updated_at' => '2021-06-22 16:28:42',
                'deleted_at' => NULL,
            ),
            57 =>
            array (
                'id' => 58,
                'id_specialty' => 7024202,
                'id_sigte' => NULL,
            'specialty_name' => 'MEDICINA NUCLEAR (EXCLUYE INFORMES)',
                'color' => 'F6FF89',
                'created_at' => '2021-06-22 16:28:42',
                'updated_at' => '2021-06-22 16:28:42',
                'deleted_at' => NULL,
            ),
            58 =>
            array (
                'id' => 59,
                'id_specialty' => 7030501,
                'id_sigte' => NULL,
                'specialty_name' => 'IMAGENOLOGÍA',
                'color' => 'F1C9FF',
                'created_at' => '2021-06-22 16:28:43',
                'updated_at' => '2021-06-22 16:28:43',
                'deleted_at' => NULL,
            ),
            59 =>
            array (
                'id' => 60,
                'id_specialty' => 7030502,
                'id_sigte' => NULL,
                'specialty_name' => 'RADIOTERAPIA ONCOLÓGICA',
                'color' => 'FDFF44',
                'created_at' => '2021-06-22 16:28:43',
                'updated_at' => '2021-06-22 16:28:43',
                'deleted_at' => NULL,
            ),
            60 =>
            array (
                'id' => 61,
                'id_specialty' => 7030996,
                'id_sigte' => NULL,
                'specialty_name' => 'LABORATORIO CLINICO',
                'color' => 'EFFFEF',
                'created_at' => '2021-06-22 16:28:44',
                'updated_at' => '2021-06-22 16:28:44',
                'deleted_at' => NULL,
            ),
            61 =>
            array (
                'id' => 62,
                'id_specialty' => 7030997,
                'id_sigte' => NULL,
                'specialty_name' => 'ANATOMÍA PATOLÓGICA',
                'color' => '71FF37',
                'created_at' => '2021-06-22 16:28:44',
                'updated_at' => '2021-06-22 16:28:44',
                'deleted_at' => NULL,
            ),
            62 =>
            array (
                'id' => 63,
                'id_specialty' => 7030998,
                'id_sigte' => NULL,
                'specialty_name' => 'MEDICINA DE URGENCIA',
                'color' => 'DCDBFF',
                'created_at' => '2021-06-22 16:28:44',
                'updated_at' => '2021-06-22 16:28:44',
                'deleted_at' => NULL,
            ),
            63 =>
            array (
                'id' => 64,
                'id_specialty' => 7030999,
                'id_sigte' => NULL,
                'specialty_name' => 'MEDICINA INTENSIVA',
                'color' => 'E5ECFF',
                'created_at' => '2021-06-22 16:28:45',
                'updated_at' => '2021-06-22 16:28:45',
                'deleted_at' => NULL,
            ),
            64 =>
            array (
                'id' => 65,
                'id_specialty' => 7031000,
                'id_sigte' => NULL,
                'specialty_name' => 'CIRUGÍA Y TRAUMATOLOGÍA BUCO MÁXILO FACIAL',
                'color' => '0BE3A2',
                'created_at' => '2021-06-22 16:28:45',
                'updated_at' => '2021-06-22 16:28:45',
                'deleted_at' => NULL,
            ),
            65 =>
            array (
                'id' => 68,
                'id_specialty' => 0,
                'id_sigte' => NULL,
                'specialty_name' => 'CIRUGÍA Y TRAUMATOLOGÍA BUCO MÁXILO FACIAL',
                'color' => '05E6AD',
                'created_at' => '2021-06-22 16:28:45',
                'updated_at' => '2021-06-22 16:28:45',
                'deleted_at' => NULL,
            ),
            66 =>
            array (
                'id' => 69,
                'id_specialty' => 1,
                'id_sigte' => NULL,
            'specialty_name' => 'UPCP (UNIDAD PACIENTE CRITICO PEDIÁTRICO)',
                'color' => 'AB2567',
                'created_at' => '2021-06-22 16:28:46',
                'updated_at' => '2021-06-22 16:28:46',
                'deleted_at' => NULL,
            ),
            67 =>
            array (
                'id' => 70,
                'id_specialty' => 1,
                'id_sigte' => NULL,
            'specialty_name' => 'UPCP (UNIDAD PACIENTE CRITICO PEDIÁTRICO)',
                'color' => 'AB2567',
                'created_at' => '2021-06-22 16:28:46',
                'updated_at' => '2021-06-22 16:28:46',
                'deleted_at' => NULL,
            ),
        ));


    }
}
