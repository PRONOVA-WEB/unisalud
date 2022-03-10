<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MpServicesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('mp_services')->delete();

        \DB::table('mp_services')->insert(array (
            0 =>
            array (
                'id' => 1,
                'service_code' => '123',
                'service_name' => 'SERV. ANESTESIA Y PABELLONES',
                'color' => NULL,
                'created_at' => '2021-06-22 16:47:09',
                'updated_at' => '2021-06-22 16:47:09',
                'deleted_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'service_code' => '234',
                'service_name' => 'SERV. CLIN. NEUROCIRUGIA',
                'color' => NULL,
                'created_at' => '2021-06-22 16:47:09',
                'updated_at' => '2021-06-22 16:47:09',
                'deleted_at' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'service_code' => NULL,
                'service_name' => 'SERV. CLIN. OFTALMOLOGIA',
                'color' => NULL,
                'created_at' => '2021-06-22 16:47:10',
                'updated_at' => '2021-06-22 16:47:10',
                'deleted_at' => NULL,
            ),
            3 =>
            array (
                'id' => 4,
                'service_code' => NULL,
                'service_name' => 'SERV. NEUROCIRUGIA',
                'color' => NULL,
                'created_at' => '2021-06-22 16:47:10',
                'updated_at' => '2021-06-22 16:47:10',
                'deleted_at' => NULL,
            ),
            4 =>
            array (
                'id' => 5,
                'service_code' => NULL,
                'service_name' => 'SERV. UPC NEONATOLOGIA',
                'color' => NULL,
                'created_at' => '2021-06-22 16:47:10',
                'updated_at' => '2021-06-22 16:47:10',
                'deleted_at' => NULL,
            ),
            5 =>
            array (
                'id' => 6,
                'service_code' => NULL,
                'service_name' => 'SERV. CIRUGIA',
                'color' => NULL,
                'created_at' => '2021-06-22 16:47:11',
                'updated_at' => '2021-06-22 16:47:11',
                'deleted_at' => NULL,
            ),
            6 =>
            array (
                'id' => 7,
                'service_code' => NULL,
                'service_name' => 'SERV. EMERGENCIA HOSPITALARIA',
                'color' => NULL,
                'created_at' => '2021-06-22 16:47:11',
                'updated_at' => '2021-06-22 16:47:11',
                'deleted_at' => NULL,
            ),
            7 =>
            array (
                'id' => 8,
                'service_code' => 'SCGO',
                'service_name' => 'SERV. GINE Y OBSTETRICIA',
                'color' => NULL,
                'created_at' => '2021-06-22 16:47:12',
                'updated_at' => '2021-06-22 16:47:12',
                'deleted_at' => NULL,
            ),
            8 =>
            array (
                'id' => 9,
                'service_code' => NULL,
                'service_name' => 'SERV. TRAUMATOLOGIA',
                'color' => NULL,
                'created_at' => '2021-06-22 16:47:12',
                'updated_at' => '2021-06-22 16:47:12',
                'deleted_at' => NULL,
            ),
            9 =>
            array (
                'id' => 10,
                'service_code' => 'UGO',
                'service_name' => 'SERV. URG GINECO-OBSTETRICA',
                'color' => NULL,
                'created_at' => '2021-06-22 16:47:12',
                'updated_at' => '2021-06-22 16:47:12',
                'deleted_at' => NULL,
            ),
            10 =>
            array (
                'id' => 11,
                'service_code' => '9',
                'service_name' => 'U.P.C.A',
                'color' => NULL,
                'created_at' => '2021-06-22 16:47:13',
                'updated_at' => '2021-06-22 16:47:13',
                'deleted_at' => NULL,
            ),
            11 =>
            array (
                'id' => 12,
                'service_code' => '10',
                'service_name' => 'SERVICIO ANESTESIA Y PABELLONES QUIRUGICOS',
                'color' => NULL,
                'created_at' => '2021-06-22 16:47:13',
                'updated_at' => '2021-06-22 16:47:13',
                'deleted_at' => NULL,
            ),
            12 =>
            array (
                'id' => 13,
                'service_code' => '11',
                'service_name' => 'SERVICO DE ODONTOLOGIA Y MAXILOFACIAL',
                'color' => NULL,
                'created_at' => '2021-06-22 16:47:13',
                'updated_at' => '2021-06-22 16:47:13',
                'deleted_at' => NULL,
            ),
            13 =>
            array (
                'id' => 14,
                'service_code' => '12',
                'service_name' => 'PSIQUIATRIA ADULTO',
                'color' => NULL,
                'created_at' => '2021-06-22 16:47:14',
                'updated_at' => '2021-06-22 16:47:14',
                'deleted_at' => NULL,
            ),
            14 =>
            array (
                'id' => 15,
                'service_code' => '13',
                'service_name' => 'PSIQUIATRIA INFANTIL',
                'color' => NULL,
                'created_at' => '2021-06-22 16:47:14',
                'updated_at' => '2021-06-22 16:47:14',
                'deleted_at' => NULL,
            ),
            15 =>
            array (
                'id' => 16,
                'service_code' => 'ANP',
                'service_name' => 'UD. ANATOMÍA PATOLÓGICA',
                'color' => NULL,
                'created_at' => '2021-06-22 16:47:14',
                'updated_at' => '2021-06-22 16:47:14',
                'deleted_at' => NULL,
            ),
            16 =>
            array (
                'id' => 17,
                'service_code' => 'CAR',
                'service_name' => 'CARDIOLOGÍA',
                'color' => NULL,
                'created_at' => '2021-06-22 16:47:15',
                'updated_at' => '2021-10-12 09:20:13',
                'deleted_at' => NULL,
            ),
            17 =>
            array (
                'id' => 18,
                'service_code' => 'Uro',
                'service_name' => 'UROLOGÍA',
                'color' => NULL,
                'created_at' => '2021-06-22 16:47:15',
                'updated_at' => '2021-10-12 09:20:39',
                'deleted_at' => NULL,
            ),
            18 =>
            array (
                'id' => 19,
                'service_code' => 'CAI',
                'service_name' => 'CARDIOLOGÍA INFANTIL',
                'color' => NULL,
                'created_at' => '2021-06-22 16:47:15',
                'updated_at' => '2021-10-12 09:21:10',
                'deleted_at' => NULL,
            ),
            19 =>
            array (
                'id' => 20,
                'service_code' => 'ozc_001',
                'service_name' => 'UPF - UCMF',
                'color' => NULL,
                'created_at' => '2021-06-22 16:47:16',
                'updated_at' => '2021-06-22 16:47:16',
                'deleted_at' => NULL,
            ),
            20 =>
            array (
                'id' => 21,
                'service_code' => 'ozc_002',
                'service_name' => 'UNIDAD PACIENTE CRÍTICO PEDIÁTRICO',
                'color' => NULL,
                'created_at' => '2021-06-22 16:47:16',
                'updated_at' => '2021-10-12 09:21:51',
                'deleted_at' => NULL,
            ),
            21 =>
            array (
                'id' => 22,
                'service_code' => 'ozc_003',
                'service_name' => 'REUMATOLOGÍA',
                'color' => NULL,
                'created_at' => '2021-06-22 16:47:16',
                'updated_at' => '2021-10-12 09:22:14',
                'deleted_at' => NULL,
            ),
            22 =>
            array (
                'id' => 23,
                'service_code' => 'ozc_004',
                'service_name' => 'UHCE INFANTO ADOLESCENTE',
                'color' => NULL,
                'created_at' => '2021-06-22 16:47:17',
                'updated_at' => '2021-06-22 16:47:17',
                'deleted_at' => NULL,
            ),
            23 =>
            array (
                'id' => 24,
                'service_code' => NULL,
                'service_name' => 'CAE.UD. DE GASTRO Y ENDOSCOPIA',
                'color' => NULL,
                'created_at' => '2021-06-22 16:47:17',
                'updated_at' => '2021-06-22 16:47:17',
                'deleted_at' => NULL,
            ),
            24 =>
            array (
                'id' => 25,
                'service_code' => 'ozc_005',
                'service_name' => 'UD.PAB. CENTRAL',
                'color' => NULL,
                'created_at' => '2021-06-22 16:47:18',
                'updated_at' => '2021-06-22 16:47:18',
                'deleted_at' => NULL,
            ),
            25 =>
            array (
                'id' => 26,
                'service_code' => 'ozc_006',
                'service_name' => 'UD.PAB MATERNIDAD',
                'color' => NULL,
                'created_at' => '2021-06-22 16:47:18',
                'updated_at' => '2021-06-22 16:47:18',
                'deleted_at' => NULL,
            ),
            26 =>
            array (
                'id' => 27,
                'service_code' => NULL,
                'service_name' => 'CR.ODONTOLOGIA',
                'color' => NULL,
                'created_at' => '2021-06-22 16:47:18',
                'updated_at' => '2021-06-22 16:47:18',
                'deleted_at' => NULL,
            ),
            27 =>
            array (
                'id' => 28,
                'service_code' => 'ozc_007',
                'service_name' => 'UD.ONCOLOGIA',
                'color' => NULL,
                'created_at' => '2021-06-22 16:47:19',
                'updated_at' => '2021-06-22 16:47:19',
                'deleted_at' => NULL,
            ),
            28 =>
            array (
                'id' => 29,
                'service_code' => 'ozc_008',
                'service_name' => 'UD.MED.TRANSFUSIONAL',
                'color' => NULL,
                'created_at' => '2021-06-22 16:47:19',
                'updated_at' => '2021-06-22 16:47:19',
                'deleted_at' => NULL,
            ),
            29 =>
            array (
                'id' => 30,
                'service_code' => 'ozc_009',
                'service_name' => 'UD.MED FISICA Y REHABILITA',
                'color' => NULL,
                'created_at' => '2021-06-22 16:47:19',
                'updated_at' => '2021-06-22 16:47:19',
                'deleted_at' => NULL,
            ),
            30 =>
            array (
                'id' => 31,
                'service_code' => NULL,
                'service_name' => 'CAE.UD. NEUROLOGÍA',
                'color' => NULL,
                'created_at' => '2021-06-22 16:47:20',
                'updated_at' => '2021-06-22 16:47:20',
                'deleted_at' => NULL,
            ),
            31 =>
            array (
                'id' => 32,
                'service_code' => 'ozc_010',
                'service_name' => 'UD.LABORATORIO CLINICO',
                'color' => NULL,
                'created_at' => '2021-06-22 16:47:20',
                'updated_at' => '2021-06-22 16:47:20',
                'deleted_at' => NULL,
            ),
            32 =>
            array (
                'id' => 33,
                'service_code' => NULL,
                'service_name' => 'CAE.UD.GINECOLOGÍA',
                'color' => NULL,
                'created_at' => '2021-06-22 16:47:20',
                'updated_at' => '2021-06-22 16:47:20',
                'deleted_at' => NULL,
            ),
            33 =>
            array (
                'id' => 34,
                'service_code' => 'ozc_011|',
                'service_name' => 'UD.IMAGENOLOGIA',
                'color' => NULL,
                'created_at' => '2021-06-22 16:47:21',
                'updated_at' => '2021-06-22 16:47:21',
                'deleted_at' => NULL,
            ),
            34 =>
            array (
                'id' => 35,
                'service_code' => NULL,
                'service_name' => 'SERV. MEDICINA',
                'color' => NULL,
                'created_at' => '2021-06-22 16:47:21',
                'updated_at' => '2021-06-22 16:47:21',
                'deleted_at' => NULL,
            ),
            35 =>
            array (
                'id' => 36,
                'service_code' => 'ozc_011',
                'service_name' => 'UD.HOSPITALIZACION DOMICILIARIA',
                'color' => NULL,
                'created_at' => '2021-06-22 16:47:21',
                'updated_at' => '2021-06-22 16:47:21',
                'deleted_at' => NULL,
            ),
            36 =>
            array (
                'id' => 37,
                'service_code' => 'ozc_012',
                'service_name' => 'UD.FARMACIA',
                'color' => NULL,
                'created_at' => '2021-06-22 16:47:22',
                'updated_at' => '2021-06-22 16:47:22',
                'deleted_at' => NULL,
            ),
            37 =>
            array (
                'id' => 38,
                'service_code' => NULL,
                'service_name' => 'CAE.UD.TRASPLANTE Y PROCURAMIENTO',
                'color' => NULL,
                'created_at' => '2021-06-22 16:47:22',
                'updated_at' => '2021-06-22 16:47:22',
                'deleted_at' => NULL,
            ),
            38 =>
            array (
                'id' => 39,
                'service_code' => 'ozc',
                'service_name' => 'UD.DIALISIS',
                'color' => NULL,
                'created_at' => '2021-06-22 16:47:23',
                'updated_at' => '2021-06-22 16:47:23',
                'deleted_at' => NULL,
            ),
            39 =>
            array (
                'id' => 40,
                'service_code' => 'ozc',
                'service_name' => 'UD.CIRUGIA INFANTIL',
                'color' => NULL,
                'created_at' => '2021-06-22 16:47:23',
                'updated_at' => '2021-06-22 16:47:23',
                'deleted_at' => NULL,
            ),
            40 =>
            array (
                'id' => 41,
                'service_code' => NULL,
                'service_name' => 'SERV. PEDIATRÍA',
                'color' => NULL,
                'created_at' => '2021-06-22 16:47:23',
                'updated_at' => '2021-06-22 16:47:23',
                'deleted_at' => NULL,
            ),
            41 =>
            array (
                'id' => 42,
                'service_code' => 'ozc',
                'service_name' => 'UD.ALTO RIESGO OBSTETRICO',
                'color' => NULL,
                'created_at' => '2021-06-22 16:47:24',
                'updated_at' => '2021-06-22 16:47:24',
                'deleted_at' => NULL,
            ),
            42 =>
            array (
                'id' => 43,
                'service_code' => 'ozc',
                'service_name' => 'UD. PISO PELVICO',
                'color' => NULL,
                'created_at' => '2021-06-22 16:47:24',
                'updated_at' => '2021-06-22 16:47:24',
                'deleted_at' => NULL,
            ),
            43 =>
            array (
                'id' => 44,
                'service_code' => 'ozc',
                'service_name' => 'UD. AUDITORIA INTERNA',
                'color' => NULL,
                'created_at' => '2021-06-22 16:47:24',
                'updated_at' => '2021-06-22 16:47:24',
                'deleted_at' => NULL,
            ),
            44 =>
            array (
                'id' => 45,
                'service_code' => 'ozc',
            'service_name' => 'U.P.C.A (SERV.PACIENTE CRITICO ADULTO)',
                'color' => NULL,
                'created_at' => '2021-06-22 16:47:25',
                'updated_at' => '2021-06-22 16:47:25',
                'deleted_at' => NULL,
            ),
            45 =>
            array (
                'id' => 46,
                'service_code' => NULL,
                'service_name' => 'HEMATOLOGÍA',
                'color' => NULL,
                'created_at' => '2021-10-12 09:10:38',
                'updated_at' => '2021-10-12 09:11:09',
                'deleted_at' => NULL,
            ),
            46 =>
            array (
                'id' => 47,
                'service_code' => NULL,
                'service_name' => 'OTORRINOLARINGOLOGÍA',
                'color' => NULL,
                'created_at' => '2021-10-12 09:12:22',
                'updated_at' => '2021-10-12 09:12:22',
                'deleted_at' => NULL,
            ),
            47 =>
            array (
                'id' => 48,
                'service_code' => NULL,
                'service_name' => 'NEFROLOGÍA',
                'color' => NULL,
                'created_at' => '2021-10-12 09:12:42',
                'updated_at' => '2021-10-12 09:12:42',
                'deleted_at' => NULL,
            ),
            48 =>
            array (
                'id' => 49,
                'service_code' => NULL,
                'service_name' => 'UTI',
                'color' => NULL,
                'created_at' => '2021-11-23 11:35:03',
                'updated_at' => '2021-11-23 11:35:03',
                'deleted_at' => NULL,
            ),
        ));


    }
}
