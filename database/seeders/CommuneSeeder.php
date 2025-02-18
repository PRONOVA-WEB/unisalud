<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Commune;

class CommuneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Commune::Create(['name' => 'Arica', 'code_deis' => '15101', 'region_id' => 15]);
        Commune::Create(['name' => 'Putre', 'code_deis' => '15201', 'region_id' => 15]);
        Commune::Create(['name' => 'General Lagos', 'code_deis' => '15202', 'region_id' => 15]);
        Commune::Create(['name' => 'Camarones', 'code_deis' => '15102', 'region_id' => 15]);
        Commune::Create([
            'name' => 'Iquique',
            'code_deis' => '1101',
            'region_id' => 1,
            'latitude' => -20.2159772,
            'longitude' => -70.1468313
        ]);
        Commune::Create([
            'name' => 'Pica',
            'code_deis' => '1405',
            'region_id' => 1,
            'latitude' => -20.49124158,
            'longitude' => -69.32915497
        ]);
        Commune::Create([
            'name' => 'Alto Hospicio',
            'code_deis' => '1107',
            'region_id' => 1,
            'latitude' => -20.26970134,
            'longitude' => -70.10069561
        ]);
        Commune::Create([
            'name' => 'Pozo Almonte',
            'code_deis' => '1401',
            'region_id' => 1,
            'latitude' => -20.25708500,
            'longitude' => -69.78465900
        ]);
        Commune::Create([
            'name' => 'Huara',
            'code_deis' => '1404',
            'region_id' => 1,
            'latitude' => -19.99531200,
            'longitude' => -69.77021200
        ]);
        Commune::Create([
            'name' => 'Camiña',
            'code_deis' => '1402',
            'region_id' => 1,
            'latitude' => -19.31340126,
            'longitude' => -69.42567576
        ]);
        Commune::Create([
            'name' => 'Colchane',
            'code_deis' => '1403',
            'region_id' => 1,
            'latitude' => -19.27617732,
            'longitude' => -68.63824369
        ]);
        Commune::Create(['name' => 'Antofagasta', 'code_deis' => '2101', 'region_id' => 2]);
        Commune::Create(['name' => 'Calama', 'code_deis' => '2201', 'region_id' => 2]);
        Commune::Create(['name' => 'Tocopilla', 'code_deis' => '2301', 'region_id' => 2]);
        Commune::Create(['name' => 'Taltal', 'code_deis' => '2104', 'region_id' => 2]);
        Commune::Create(['name' => 'Mejillones', 'code_deis' => '2102', 'region_id' => 2]);
        Commune::Create(['name' => 'Maria Elena', 'code_deis' => '2302', 'region_id' => 2]);
        Commune::Create(['name' => 'San Pedro de Atacama', 'code_deis' => '2203', 'region_id' => 2]);
        Commune::Create(['name' => 'Sierra Gorda', 'code_deis' => '2103', 'region_id' => 2]);
        Commune::Create(['name' => 'Ollagüe', 'code_deis' => '2202', 'region_id' => 2]);
        Commune::Create(['name' => 'Copiapó', 'code_deis' => '3101', 'region_id' => 3]);
        Commune::Create(['name' => 'Chañaral', 'code_deis' => '3201', 'region_id' => 3]);
        Commune::Create(['name' => 'Diego de Almagro', 'code_deis' => '3202', 'region_id' => 3]);
        Commune::Create(['name' => 'Vallenar', 'code_deis' => '3301', 'region_id' => 3]);
        Commune::Create(['name' => 'Huasco', 'code_deis' => '3304', 'region_id' => 3]);
        Commune::Create(['name' => 'Caldera', 'code_deis' => '3102', 'region_id' => 3]);
        Commune::Create(['name' => 'Tierra Amarilla', 'code_deis' => '3103', 'region_id' => 3]);
        Commune::Create(['name' => 'Freirina', 'code_deis' => '3303', 'region_id' => 3]);
        Commune::Create(['name' => 'Alto del Carmen', 'code_deis' => '3302', 'region_id' => 3]);
        Commune::Create(['name' => 'La Serena', 'code_deis' => '4101', 'region_id' => 4]);
        Commune::Create(['name' => 'Monte Patria', 'code_deis' => '4303', 'region_id' => 4]);
        Commune::Create(['name' => 'Coquimbo', 'code_deis' => '4102', 'region_id' => 4]);
        Commune::Create(['name' => 'Ovalle', 'code_deis' => '4301', 'region_id' => 4]);
        Commune::Create(['name' => 'Illapel', 'code_deis' => '4201', 'region_id' => 4]);
        Commune::Create(['name' => 'Salamanca', 'code_deis' => '4204', 'region_id' => 4]);
        Commune::Create(['name' => 'Combarbalá', 'code_deis' => '4302', 'region_id' => 4]);
        Commune::Create(['name' => 'Andacollo', 'code_deis' => '4103', 'region_id' => 4]);
        Commune::Create(['name' => 'Vicuña', 'code_deis' => '4106', 'region_id' => 4]);
        Commune::Create(['name' => 'Los Vilos', 'code_deis' => '4203', 'region_id' => 4]);
        Commune::Create(['name' => 'Paihuano', 'code_deis' => '4105', 'region_id' => 4]);
        Commune::Create(['name' => 'Punitaqui', 'code_deis' => '4304', 'region_id' => 4]);
        Commune::Create(['name' => 'Canela', 'code_deis' => '4202', 'region_id' => 4]);
        Commune::Create(['name' => 'Río Hurtado', 'code_deis' => '4305', 'region_id' => 4]);
        Commune::Create(['name' => 'La Higuera', 'code_deis' => '4104', 'region_id' => 4]);
        Commune::Create(['name' => 'Valparaíso', 'code_deis' => '5101', 'region_id' => 5]);
        Commune::Create(['name' => 'San Antonio', 'code_deis' => '5601', 'region_id' => 5]);
        Commune::Create(['name' => 'Casablanca', 'code_deis' => '5102', 'region_id' => 5]);
        Commune::Create(['name' => 'Cartagena', 'code_deis' => '5603', 'region_id' => 5]);
        Commune::Create(['name' => 'Algarrobo', 'code_deis' => '5602', 'region_id' => 5]);
        Commune::Create(['name' => 'El Quisco', 'code_deis' => '5604', 'region_id' => 5]);
        Commune::Create(['name' => 'Santo Domingo', 'code_deis' => '5606', 'region_id' => 5]);
        Commune::Create(['name' => 'El Tabo', 'code_deis' => '5605', 'region_id' => 5]);
        Commune::Create(['name' => 'Juan Fernández', 'code_deis' => '5104', 'region_id' => 5]);
        Commune::Create(['name' => 'Viña del Mar', 'code_deis' => '5109', 'region_id' => 5]);
        Commune::Create(['name' => 'Quillota', 'code_deis' => '5501', 'region_id' => 5]);
        Commune::Create(['name' => 'Quilpue', 'code_deis' => '5801', 'region_id' => 5]);
        Commune::Create(['name' => 'Calera', 'code_deis' => '5502', 'region_id' => 5]);
        Commune::Create(['name' => 'Limache', 'code_deis' => '5802', 'region_id' => 5]);
        Commune::Create(['name' => 'La Ligua', 'code_deis' => '5401', 'region_id' => 5]);
        Commune::Create(['name' => 'Cabildo', 'code_deis' => '5402', 'region_id' => 5]);
        Commune::Create(['name' => 'Petorca', 'code_deis' => '5404', 'region_id' => 5]);
        Commune::Create(['name' => 'Quintero', 'code_deis' => '5107', 'region_id' => 5]);
        Commune::Create(['name' => 'Villa Alemana', 'code_deis' => '5804', 'region_id' => 5]);
        Commune::Create(['name' => 'Con Con', 'code_deis' => '5103', 'region_id' => 5]);
        Commune::Create(['name' => 'La Cruz', 'code_deis' => '5504', 'region_id' => 5]);
        Commune::Create(['name' => 'Puchuncaví', 'code_deis' => '5105', 'region_id' => 5]);
        Commune::Create(['name' => 'Olmué', 'code_deis' => '5803', 'region_id' => 5]);
        Commune::Create(['name' => 'Hijuelas', 'code_deis' => '5503', 'region_id' => 5]);
        Commune::Create(['name' => 'Nogales', 'code_deis' => '5506', 'region_id' => 5]);
        Commune::Create(['name' => 'Papudo', 'code_deis' => '5403', 'region_id' => 5]);
        Commune::Create(['name' => 'Zapallar', 'code_deis' => '5405', 'region_id' => 5]);
        Commune::Create(['name' => 'San Felipe', 'code_deis' => '5701', 'region_id' => 5]);
        Commune::Create(['name' => 'Los Andes', 'code_deis' => '5301', 'region_id' => 5]);
        Commune::Create(['name' => 'Llaillay', 'code_deis' => '5703', 'region_id' => 5]);
        Commune::Create(['name' => 'Putaendo', 'code_deis' => '5705', 'region_id' => 5]);
        Commune::Create(['name' => 'Rinconada', 'code_deis' => '5303', 'region_id' => 5]);
        Commune::Create(['name' => 'San Esteban', 'code_deis' => '5304', 'region_id' => 5]);
        Commune::Create(['name' => 'Catemu', 'code_deis' => '5702', 'region_id' => 5]);
        Commune::Create(['name' => 'Calle Larga', 'code_deis' => '5302', 'region_id' => 5]);
        Commune::Create(['name' => 'Santa Maria', 'code_deis' => '5706', 'region_id' => 5]);
        Commune::Create(['name' => 'Panquehue', 'code_deis' => '5704', 'region_id' => 5]);
        Commune::Create(['name' => 'Independencia', 'code_deis' => '13108', 'region_id' => 13, 'latitude' => -33.4219880,
        'longitude' => -70.6549320]);
        Commune::Create(['name' => 'Tiltil', 'code_deis' => '13303', 'region_id' => 13, 'latitude' => -33.0833333,
        'longitude' => -70.9333333]);
        Commune::Create(['name' => 'Recoleta', 'code_deis' => '13127', 'region_id' => 13, 'latitude' => -70.6391920,
        'longitude' => -33.4081480]);
        Commune::Create(['name' => 'Huechuraba', 'code_deis' => '13107', 'region_id' => 13, 'latitude' => -33.3500000,
        'longitude' => -70.6666667]);
        Commune::Create(['name' => 'Quilicura', 'code_deis' => '13125', 'region_id' => 13, 'latitude' => -33.3666667,
        'longitude' => -70.7500000]);
        Commune::Create(['name' => 'Colina', 'code_deis' => '13301', 'region_id' => 13, 'latitude' => -33.2000000,
        'longitude' => -70.6833333]);
        Commune::Create(['name' => 'Conchalí', 'code_deis' => '13104', 'region_id' => 13, 'latitude' => -33.3500000,
        'longitude' => -70.6166667]);
        Commune::Create(['name' => 'Lampa', 'code_deis' => '13302', 'region_id' => 13, 'latitude' => -33.2833333,
        'longitude' => -70.9000000]);
        Commune::Create(['name' => 'Santiago', 'code_deis' => '13101', 'region_id' => 13, 'latitude' => -33.4500000,
        'longitude' => -70.6666667]);
        Commune::Create(['name' => 'Curacaví', 'code_deis' => '13503', 'region_id' => 13, 'latitude' => -33.4000000,
        'longitude' => -71.1500000]);
        Commune::Create(['name' => 'Quinta Normal', 'code_deis' => '13126', 'region_id' => 13, 'latitude' => -70.7000000,
        'longitude' => -33.4500000]);
        Commune::Create(['name' => 'Talagante', 'code_deis' => '13601', 'region_id' => 13, 'latitude' => -33.6666667,
        'longitude' => -70.9333333]);
        Commune::Create(['name' => 'Peñaflor', 'code_deis' => '13605', 'region_id' => 13, 'latitude' => -33.616666,
        'longitude' => -70.9166667]);
        Commune::Create(['name' => 'Melipilla', 'code_deis' => '13501', 'region_id' => 13, 'latitude' => -33.7000000,
        'longitude' => -71.2166667]);
        Commune::Create(['name' => 'Pudahuel', 'code_deis' => '13124', 'region_id' => 13, 'latitude' => -33.4333333,
        'longitude' => -70.7166667]);
        Commune::Create(['name' => 'Lo Prado', 'code_deis' => '13117', 'region_id' => 13, 'latitude' => -33.4333333,
        'longitude' => -70.7166667]);
        Commune::Create(['name' => 'Cerro Navia', 'code_deis' => '13103', 'region_id' => 13, 'latitude' => -33.4166667,
        'longitude' => -70.7166667]);
        Commune::Create(['name' => 'Renca', 'code_deis' => '13128', 'region_id' => 13, 'latitude' => -33.4000000,
        'longitude' => -70.7333333]);
        Commune::Create(['name' => 'Padre Hurtado', 'code_deis' => '13604', 'region_id' => 13, 'latitude' => -33.5666667,
        'longitude' => -70.8333333]);
        Commune::Create(['name' => 'El Monte', 'code_deis' => '13602', 'region_id' => 13, 'latitude' => -33.6833333,
        'longitude' => -71.0166667]);
        Commune::Create(['name' => 'Isla de Maipo', 'code_deis' => '13603', 'region_id' => 13, 'latitude' => -33.7500000,
        'longitude' => -70.9000000]);
        Commune::Create(['name' => 'Maria Pinto', 'code_deis' => '13504', 'region_id' => 13, 'latitude' => -33.5333333,
        'longitude' => -71.1333333]);
        Commune::Create(['name' => 'San Pedro', 'code_deis' => '13505', 'region_id' => 13, 'latitude' => -33.9000000,
        'longitude' => -71.4666667]);
        Commune::Create(['name' => 'Alhué', 'code_deis' => '13502', 'region_id' => 13, 'latitude' => -34.06,
        'longitude' => -71.15]);
        Commune::Create(['name' => 'Maipú', 'code_deis' => '13119', 'region_id' => 13, 'latitude' => -33.5166667,
        'longitude' => -70.7666667]);
        Commune::Create(['name' => 'Estación Central', 'code_deis' => '13106', 'region_id' => 13, 'latitude' => -33.4633150,
        'longitude' => -70.7029760]);
        Commune::Create(['name' => 'Cerrillos', 'code_deis' => '13102', 'region_id' => 13, 'latitude' => -33.4833333,
        'longitude' => -70.7000000]);
        Commune::Create(['name' => 'Pedro Aguirre Cerda', 'code_deis' => '13121', 'region_id' => 13, 'latitude' => -33.4924550,
        'longitude' => -70.6780860]);
        Commune::Create(['name' => 'Providencia', 'code_deis' => '13123', 'region_id' => 13, 'latitude' => -33.4333333,
        'longitude' => -70.6166667]);
        Commune::Create(['name' => 'Peñalolén', 'code_deis' => '13122', 'region_id' => 13, 'latitude' => -33.4833333,
        'longitude' => -70.5333333]);
        Commune::Create(['name' => 'Isla de Pascua', 'code_deis' => '5201', 'region_id' => 5]);
        Commune::Create(['name' => 'Vitacura', 'code_deis' => '13132', 'region_id' => 13, 'latitude' => -33.4000000,
        'longitude' => -70.6000000]);
        Commune::Create(['name' => 'Las Condes', 'code_deis' => '13114', 'region_id' => 13, 'latitude' => -33.4166667,
        'longitude' => -70.5833333]);
        Commune::Create(['name' => 'Macul', 'code_deis' => '13118', 'region_id' => 13, 'latitude' => -33.5000000,
        'longitude' => -70.5666667]);
        Commune::Create(['name' => 'Ñuñoa', 'code_deis' => '13120', 'region_id' => 13, 'latitude' => -33.4666667,
        'longitude' => -70.6000000]);
        Commune::Create(['name' => 'La Reina', 'code_deis' => '13113', 'region_id' => 13, 'latitude' => -33.4500000,
        'longitude' => -70.5500000]);
        Commune::Create(['name' => 'Lo Barnechea', 'code_deis' => '13115', 'region_id' => 13, 'latitude' => -33.3500000,
        'longitude' => -70.5166667]);
        Commune::Create(['name' => 'San Miguel', 'code_deis' => '13130', 'region_id' => 13, 'latitude' => -33.5000000,
        'longitude' => -70.6666667]);
        Commune::Create(['name' => 'Buin', 'code_deis' => '13402', 'region_id' => 13, 'latitude' => -33.7333333,
        'longitude' => -70.7500000]);
        Commune::Create(['name' => 'Puente Alto', 'code_deis' => '13201', 'region_id' => 13, 'latitude' => -33.6166667,
        'longitude' => -70.5833333]);
        Commune::Create(['name' => 'San Bernardo', 'code_deis' => '13401', 'region_id' => 13, 'latitude' => -33.6000000,
        'longitude' => -70.7166667]);
        Commune::Create(['name' => 'Lo Espejo', 'code_deis' => '13116', 'region_id' => 13, 'latitude' => -33.5333333,
        'longitude' => -70.7166667]);
        Commune::Create(['name' => 'San Joaquín', 'code_deis' => '13129', 'region_id' => 13, 'latitude' => -33.5000000,
        'longitude' => -70.6166667]);
        Commune::Create(['name' => 'Paine', 'code_deis' => '13404', 'region_id' => 13, 'latitude' => -33.8166667,
        'longitude' => -70.7500000]);
        Commune::Create(['name' => 'El Bosque', 'code_deis' => '13105', 'region_id' => 13, 'latitude' => -33.5666667,
        'longitude' => -70.7000000]);
        Commune::Create(['name' => 'La Cisterna', 'code_deis' => '13109', 'region_id' => 13, 'latitude' => -33.5500000,
        'longitude' => -70.6833333]);
        Commune::Create(['name' => 'La Granja', 'code_deis' => '13111', 'region_id' => 13, 'latitude' => -33.5833333,
        'longitude' => -70.5833333]);
        Commune::Create(['name' => 'Calera de Tango', 'code_deis' => '13403', 'region_id' => 13, 'latitude' => -33.6500000,
        'longitude' => -70.8166667]);
        Commune::Create(['name' => 'San José de Maipo', 'code_deis' => '13203', 'region_id' =>  13, 'latitude' => -33.6333333,
        'longitude' => -70.3666667]);
        Commune::Create(['name' => 'San Ramón', 'code_deis' => '13131', 'region_id' => 13, 'latitude' => -33.4500000,
        'longitude' => -70.5000000]);
        Commune::Create(['name' => 'La Florida', 'code_deis' => '13110', 'region_id' => 13, 'latitude' => -33.5500000,
        'longitude' => -70.5666667]);
        Commune::Create(['name' => 'La Pintana', 'code_deis' => '13112', 'region_id' => 13, 'latitude' => -33.5833333,
        'longitude' => -70.6166667]);
        Commune::Create(['name' => 'Pirque', 'code_deis' => '13202', 'region_id' => 13, 'latitude' => -33.6333333,
        'longitude' => -70.5500000]);
        Commune::Create(['name' => 'Rancagua', 'code_deis' => '6101', 'region_id' => 6]);
        Commune::Create(['name' => 'Graneros', 'code_deis' => '6106', 'region_id' => 6]);
        Commune::Create(['name' => 'Coinco', 'code_deis' => '6103', 'region_id' => 6]);
        Commune::Create(['name' => 'Peumo', 'code_deis' => '6112', 'region_id' => 6]);
        Commune::Create(['name' => 'Rengo', 'code_deis' => '6115', 'region_id' => 6]);
        Commune::Create(['name' => 'San Vicente', 'code_deis' => '6117', 'region_id' => 6]);
        Commune::Create(['name' => 'Pichidegua', 'code_deis' => '6113', 'region_id' => 6]);
        Commune::Create(['name' => 'San Fernando', 'code_deis' => '6301', 'region_id' => 6]);
        Commune::Create(['name' => 'Chimbarongo', 'code_deis' => '6303', 'region_id' => 6]);
        Commune::Create(['name' => 'Nancagua', 'code_deis' => '6305', 'region_id' => 6]);
        Commune::Create(['name' => 'Santa Cruz', 'code_deis' => '6310', 'region_id' => 6]);
        Commune::Create(['name' => 'Marchihue', 'code_deis' => '6204', 'region_id' => 6]);
        Commune::Create(['name' => 'Pichilemu', 'code_deis' => '6201', 'region_id' => 6]);
        Commune::Create(['name' => 'Lolol', 'code_deis' => '6304', 'region_id' => 6]);
        Commune::Create(['name' => 'Litueche', 'code_deis' => '6203', 'region_id' => 6]);
        Commune::Create(['name' => 'Machalí', 'code_deis' => '6108', 'region_id' => 6]);
        Commune::Create(['name' => 'Mostazal', 'code_deis' => '6110', 'region_id' => 6]);
        Commune::Create(['name' => 'Codegua', 'code_deis' => '6102', 'region_id' => 6]);
        Commune::Create(['name' => 'Doñihue', 'code_deis' => '6105', 'region_id' => 6]);
        Commune::Create(['name' => 'Coltauco', 'code_deis' => '6104', 'region_id' => 6]);
        Commune::Create(['name' => 'Requínoa', 'code_deis' => '6116', 'region_id' => 6]);
        Commune::Create(['name' => 'Las Cabras', 'code_deis' => '6107', 'region_id' => 6]);
        Commune::Create(['name' => 'Quinta de Tilcoco', 'code_deis' => '6114', 'region_id' => 6]);
        Commune::Create(['name' => 'Peralillo', 'code_deis' => '6307', 'region_id' => 6]);
        Commune::Create(['name' => 'La Estrella', 'code_deis' => '6202', 'region_id' => 6]);
        Commune::Create(['name' => 'Chepica', 'code_deis' => '6302', 'region_id' => 6]);
        Commune::Create(['name' => 'Paredones', 'code_deis' => '6206', 'region_id' => 6]);
        Commune::Create(['name' => 'Placilla', 'code_deis' => '6308', 'region_id' => 6]);
        Commune::Create(['name' => 'Navidad', 'code_deis' => '6205', 'region_id' => 6]);
        Commune::Create(['name' => 'Malloa', 'code_deis' => '6109', 'region_id' => 6]);
        Commune::Create(['name' => 'Olivar', 'code_deis' => '6111', 'region_id' => 6]);
        Commune::Create(['name' => 'Palmilla', 'code_deis' => '6306', 'region_id' => 6]);
        Commune::Create(['name' => 'Pumanque', 'code_deis' => '6309', 'region_id' => 6]);
        Commune::Create(['name' => 'Talca', 'code_deis' => '7101', 'region_id' => 7]);
        Commune::Create(['name' => 'Curicó', 'code_deis' => '7301', 'region_id' => 7]);
        Commune::Create(['name' => 'Teno', 'code_deis' => '7308', 'region_id' => 7]);
        Commune::Create(['name' => 'Molina', 'code_deis' => '7304', 'region_id' => 7]);
        Commune::Create(['name' => 'Hualañé', 'code_deis' => '7302', 'region_id' => 7]);
        Commune::Create(['name' => 'Licantén', 'code_deis' => '7303', 'region_id' => 7]);
        Commune::Create(['name' => 'Curepto', 'code_deis' => '7103', 'region_id' => 7]);
        Commune::Create(['name' => 'Constitución', 'code_deis' => '7102', 'region_id' => 7]);
        Commune::Create(['name' => 'Linares', 'code_deis' => '7401', 'region_id' => 7]);
        Commune::Create(['name' => 'San Javier', 'code_deis' => '7406', 'region_id' => 7]);
        Commune::Create(['name' => 'Parral', 'code_deis' => '7404', 'region_id' => 7]);
        Commune::Create(['name' => 'Cauquenes', 'code_deis' => '7201', 'region_id' => 7]);
        Commune::Create(['name' => 'Chanco', 'code_deis' => '7202', 'region_id' => 7]);
        Commune::Create(['name' => 'Villa Alegre', 'code_deis' => '7407', 'region_id' => 7]);
        Commune::Create(['name' => 'Pencahue', 'code_deis' => '7107', 'region_id' => 7]);
        Commune::Create(['name' => 'San Clemente', 'code_deis' => '7109', 'region_id' => 7]);
        Commune::Create(['name' => 'Maule', 'code_deis' => '7105', 'region_id' => 7]);
        Commune::Create(['name' => 'Pelarco', 'code_deis' => '7106', 'region_id' => 7]);
        Commune::Create(['name' => 'Río Claro', 'code_deis' => '7108', 'region_id' => 7]);
        Commune::Create(['name' => 'Colbún', 'code_deis' => '7402', 'region_id' => 7]);
        Commune::Create(['name' => 'Yerbas Buenas', 'code_deis' => '7408', 'region_id' => 7]);
        Commune::Create(['name' => 'Longaví', 'code_deis' => '7403', 'region_id' => 7]);
        Commune::Create(['name' => 'Retiro', 'code_deis' => '7405', 'region_id' => 7]);
        Commune::Create(['name' => 'Pelluhue', 'code_deis' => '7203', 'region_id' => 7]);
        Commune::Create(['name' => 'San Rafael', 'code_deis' => '7110', 'region_id' => 7]);
        Commune::Create(['name' => 'Sagrada Familia', 'code_deis' => '7307', 'region_id' => 7]);
        Commune::Create(['name' => 'Vichuquén', 'code_deis' => '7309', 'region_id' => 7]);
        Commune::Create(['name' => 'Romeral', 'code_deis' => '7306', 'region_id' => 7]);
        Commune::Create(['name' => 'Rauco', 'code_deis' => '7305', 'region_id' => 7]);
        Commune::Create(['name' => 'Empedrado', 'code_deis' => '7104', 'region_id' => 7]);
        Commune::Create(['name' => 'Chillán', 'code_deis' => '16101', 'region_id' => 16]);
        Commune::Create(['name' => 'San Carlos', 'code_deis' => '16301', 'region_id' => 16]);
        Commune::Create(['name' => 'Bulnes', 'code_deis' => '16102', 'region_id' => 16]);
        Commune::Create(['name' => 'Yungay', 'code_deis' => '16109', 'region_id' => 16]);
        Commune::Create(['name' => 'Quirihue', 'code_deis' => '16201', 'region_id' => 16]);
        Commune::Create(['name' => 'El Carmen', 'code_deis' => '16104', 'region_id' => 16]);
        Commune::Create(['name' => 'Coelemu', 'code_deis' => '16203', 'region_id' => 16]);
        Commune::Create(['name' => 'Portezuelo', 'code_deis' => '16205', 'region_id' => 16]);
        Commune::Create(['name' => 'Quillón', 'code_deis' => '16107', 'region_id' => 16]);
        Commune::Create(['name' => 'Cobquecura', 'code_deis' => '16202', 'region_id' => 16]);
        Commune::Create(['name' => 'San Ignacio', 'code_deis' => '16108', 'region_id' => 16]);
        Commune::Create(['name' => 'San Fabián', 'code_deis' => '16304', 'region_id' => 16]);
        Commune::Create(['name' => 'Pemuco', 'code_deis' => '16105', 'region_id' => 16]);
        Commune::Create(['name' => 'San Nicolás', 'code_deis' => '16305', 'region_id' => 16]);
        Commune::Create(['name' => 'Ñiquén', 'code_deis' => '16303', 'region_id' => 16]);
        Commune::Create(['name' => 'Ninhue', 'code_deis' => '16204', 'region_id' => 16]);
        Commune::Create(['name' => 'Ránquil', 'code_deis' => '16206', 'region_id' => 16]);
        Commune::Create(['name' => 'Pinto', 'code_deis' => '16106', 'region_id' => 16]);
        Commune::Create(['name' => 'Coihueco', 'code_deis' => '16302', 'region_id' => 16]);
        Commune::Create(['name' => 'Treguaco', 'code_deis' => '16207', 'region_id' => 16]);
        Commune::Create(['name' => 'Chillán Viejo', 'code_deis' => '16103', 'region_id' => 16]);
        Commune::Create(['name' => 'Concepción', 'code_deis' => '8101', 'region_id' => 8]);
        Commune::Create(['name' => 'Coronel', 'code_deis' => '8102', 'region_id' => 8]);
        Commune::Create(['name' => 'Lota', 'code_deis' => '8106', 'region_id' => 8]);
        Commune::Create(['name' => 'Santa Juana', 'code_deis' => '8109', 'region_id' => 8]);
        Commune::Create(['name' => 'Florida', 'code_deis' => '8104', 'region_id' => 8]);
        Commune::Create(['name' => 'Talcahuano', 'code_deis' => '8110', 'region_id' => 8]);
        Commune::Create(['name' => 'Hualpén', 'code_deis' => '8112', 'region_id' => 8]);
        Commune::Create(['name' => 'San Pedro de la Paz', 'code_deis' => '8108', 'region_id' => 8]);
        Commune::Create(['name' => 'Chiguayante', 'code_deis' => '8103', 'region_id' => 8]);
        Commune::Create(['name' => 'Hualqui', 'code_deis' => '8105', 'region_id' => 8]);
        Commune::Create(['name' => 'Tome', 'code_deis' => '8111', 'region_id' => 8]);
        Commune::Create(['name' => 'Penco', 'code_deis' => '8107', 'region_id' => 8]);
        Commune::Create(['name' => 'Los Ángeles', 'code_deis' => '8301', 'region_id' => 8]);
        Commune::Create(['name' => 'Tucapel', 'code_deis' => '8312', 'region_id' => 8]);
        Commune::Create(['name' => 'Santa Bárbara', 'code_deis' => '8311', 'region_id' => 8]);
        Commune::Create(['name' => 'Yumbel', 'code_deis' => '8313', 'region_id' => 8]);
        Commune::Create(['name' => 'Mulchén', 'code_deis' => '8305', 'region_id' => 8]);
        Commune::Create(['name' => 'Nacimiento', 'code_deis' => '8306', 'region_id' => 8]);
        Commune::Create(['name' => 'Laja', 'code_deis' => '8304', 'region_id' => 8]);
        Commune::Create(['name' => 'Cabrero', 'code_deis' => '8303', 'region_id' => 8]);
        Commune::Create(['name' => 'Antuco', 'code_deis' => '8302', 'region_id' => 8]);
        Commune::Create(['name' => 'Quilleco', 'code_deis' => '8309', 'region_id' => 8]);
        Commune::Create(['name' => 'Negrete', 'code_deis' => '8307', 'region_id' => 8]);
        Commune::Create(['name' => 'San Rosendo', 'code_deis' => '8310', 'region_id' => 8]);
        Commune::Create(['name' => 'Alto Biobío', 'code_deis' => '8314', 'region_id' => 8]);
        Commune::Create(['name' => 'Quilaco', 'code_deis' => '8308', 'region_id' => 8]);
        Commune::Create(['name' => 'Temuco', 'code_deis' => '9101', 'region_id' => 9]);
        Commune::Create(['name' => 'Lautaro', 'code_deis' => '9108', 'region_id' => 9]);
        Commune::Create(['name' => 'Galvarino', 'code_deis' => '9106', 'region_id' => 9]);
        Commune::Create(['name' => 'Vilcún', 'code_deis' => '9119', 'region_id' => 9]);
        Commune::Create(['name' => 'Cunco', 'code_deis' => '9103', 'region_id' => 9]);
        Commune::Create(['name' => 'Nueva Imperial', 'code_deis' => '9111', 'region_id' => 9]);
        Commune::Create(['name' => 'Carahue', 'code_deis' => '9102', 'region_id' => 9]);
        Commune::Create(['name' => 'Saavedra', 'code_deis' => '9116', 'region_id' => 9]);
        Commune::Create(['name' => 'Pitrufquén', 'code_deis' => '9114', 'region_id' => 9]);
        Commune::Create(['name' => 'Toltén', 'code_deis' => '9118', 'region_id' => 9]);
        Commune::Create(['name' => 'Gorbea', 'code_deis' => '9107', 'region_id' => 9]);
        Commune::Create(['name' => 'Loncoche', 'code_deis' => '9109', 'region_id' => 9]);
        Commune::Create(['name' => 'Villarrica', 'code_deis' => '9120', 'region_id' => 9]);
        Commune::Create(['name' => 'Pucón', 'code_deis' => '9115', 'region_id' => 9]);
        Commune::Create(['name' => 'Padre Las Casas', 'code_deis' => '9112', 'region_id' => 9]);
        Commune::Create(['name' => 'Freire', 'code_deis' => '9105', 'region_id' => 9]);
        Commune::Create(['name' => 'Melipeuco', 'code_deis' => '9110', 'region_id' => 9]);
        Commune::Create(['name' => 'Teodoro Schmidt', 'code_deis' => '9117', 'region_id' => 9]);
        Commune::Create(['name' => 'Curarrehue', 'code_deis' => '9104', 'region_id' => 9]);
        Commune::Create(['name' => 'Perquenco', 'code_deis' => '9113', 'region_id' => 9]);
        Commune::Create(['name' => 'Cholchol', 'code_deis' => '9121', 'region_id' => 9]);
        Commune::Create(['name' => 'Valdivia', 'code_deis' => '14101', 'region_id' => 14]);
        Commune::Create(['name' => 'Corral', 'code_deis' => '14102', 'region_id' => 14]);
        Commune::Create(['name' => 'Los Lagos', 'code_deis' => '14104', 'region_id' => 14]);
        Commune::Create(['name' => 'Lanco', 'code_deis' => '14103', 'region_id' => 14]);
        Commune::Create(['name' => 'La Unión', 'code_deis' => '14201', 'region_id' => 14]);
        Commune::Create(['name' => 'Río Bueno', 'code_deis' => '14204', 'region_id' => 14]);
        Commune::Create(['name' => 'Paillaco', 'code_deis' => '14107', 'region_id' => 14]);
        Commune::Create(['name' => 'Mariquina', 'code_deis' => '14106', 'region_id' => 14]);
        Commune::Create(['name' => 'Panguipulli', 'code_deis' => '14108', 'region_id' => 14]);
        Commune::Create(['name' => 'Futrono', 'code_deis' => '14202', 'region_id' => 14]);
        Commune::Create(['name' => 'Lago Ranco', 'code_deis' => '14203', 'region_id' => 14]);
        Commune::Create(['name' => 'Máfil', 'code_deis' => '14105', 'region_id' => 14]);
        Commune::Create(['name' => 'Osorno', 'code_deis' => '10301', 'region_id' => 10]);
        Commune::Create(['name' => 'Purranque', 'code_deis' => '10303', 'region_id' => 10]);
        Commune::Create(['name' => 'Río Negro', 'code_deis' => '10305', 'region_id' => 10]);
        Commune::Create(['name' => 'Puerto Octay', 'code_deis' => '10302', 'region_id' => 10]);
        Commune::Create(['name' => 'San Juan de la Costa', 'code_deis' => '10306', 'region_id' => 10]);
        Commune::Create(['name' => 'San Pablo', 'code_deis' => '10307', 'region_id' => 10]);
        Commune::Create(['name' => 'Puyehue', 'code_deis' => '10304', 'region_id' => 10]);
        Commune::Create(['name' => 'Puerto Montt', 'code_deis' => '10101', 'region_id' => 10]);
        Commune::Create(['name' => 'Llanquihue', 'code_deis' => '10107', 'region_id' => 10]);
        Commune::Create(['name' => 'Frutillar', 'code_deis' => '10105', 'region_id' => 10]);
        Commune::Create(['name' => 'Fresia', 'code_deis' => '10104', 'region_id' => 10]);
        Commune::Create(['name' => 'Maullín', 'code_deis' => '10108', 'region_id' => 10]);
        Commune::Create(['name' => 'Calbuco', 'code_deis' => '10102', 'region_id' => 10]);
        Commune::Create(['name' => 'Palena', 'code_deis' => '10404', 'region_id' => 10]);
        Commune::Create(['name' => 'Futaleufú', 'code_deis' => '10402', 'region_id' => 10]);
        Commune::Create(['name' => 'Puerto Varas', 'code_deis' => '10109', 'region_id' => 10]);
        Commune::Create(['name' => 'Los Muermos', 'code_deis' => '10106', 'region_id' => 10]);
        Commune::Create(['name' => 'Hualaihué', 'code_deis' => '10403', 'region_id' => 10]);
        Commune::Create(['name' => 'Cochamó', 'code_deis' => '10103', 'region_id' => 10]);
        Commune::Create(['name' => 'Chaitén', 'code_deis' => '10401', 'region_id' => 10]);
        Commune::Create(['name' => 'Coyhaique', 'code_deis' => '11101', 'region_id' => 11]);
        Commune::Create(['name' => 'Aisén', 'code_deis' => '11201', 'region_id' => 11]);
        Commune::Create(['name' => 'Chile Chico', 'code_deis' => '11401', 'region_id' => 11]);
        Commune::Create(['name' => 'Cochrane', 'code_deis' => '11301', 'region_id' => 11]);
        Commune::Create(['name' => 'Cisnes', 'code_deis' => '11202', 'region_id' => 11]);
        Commune::Create(['name' => 'Guaitecas', 'code_deis' => '11203', 'region_id' => 11]);
        Commune::Create(['name' => 'Lago Verde', 'code_deis' => '11102', 'region_id' => 11]);
        Commune::Create(['name' => 'Río Ibáñez', 'code_deis' => '11402', 'region_id' => 11]);
        Commune::Create(['name' => 'OHiggins', 'code_deis' => '11302', 'region_id' => 11]);
        Commune::Create(['name' => 'Tortel', 'code_deis' => '11303', 'region_id' => 11]);
        Commune::Create(['name' => 'Punta Arenas', 'code_deis' => '12101', 'region_id' => 12]);
        Commune::Create(['name' => 'Natales', 'code_deis' => '12401', 'region_id' => 12]);
        Commune::Create(['name' => 'Porvenir', 'code_deis' => '12301', 'region_id' => 12]);
        Commune::Create(['name' => 'Cabo de Hornos', 'code_deis' => '12201', 'region_id' => 12]);
        Commune::Create(['name' => 'Primavera', 'code_deis' => '12302', 'region_id' => 12]);
        Commune::Create(['name' => 'Torres del Paine', 'code_deis' => '12402', 'region_id' => 12]);
        Commune::Create(['name' => 'Río Verde', 'code_deis' => '12103', 'region_id' => 12]);
        Commune::Create(['name' => 'Laguna Blanca', 'code_deis' => '12102', 'region_id' => 12]);
        Commune::Create(['name' => 'San Gregorio', 'code_deis' => '12104', 'region_id' => 12]);
        Commune::Create(['name' => 'Timaukel', 'code_deis' => '12303', 'region_id' => 12]);
        Commune::Create(['name' => 'Lebu', 'code_deis' => '8201', 'region_id' => 8]);
        Commune::Create(['name' => 'Curanilahue', 'code_deis' => '8205', 'region_id' => 8]);
        Commune::Create(['name' => 'Cañete', 'code_deis' => '8203', 'region_id' => 8]);
        Commune::Create(['name' => 'Contulmo', 'code_deis' => '8204', 'region_id' => 8]);
        Commune::Create(['name' => 'Arauco', 'code_deis' => '8202', 'region_id' => 8]);
        Commune::Create(['name' => 'Tirúa', 'code_deis' => '8207', 'region_id' => 8]);
        Commune::Create(['name' => 'Los Álamos', 'code_deis' => '8206', 'region_id' => 8]);
        Commune::Create(['name' => 'Angol', 'code_deis' => '9201', 'region_id' => 9]);
        Commune::Create(['name' => 'Purén', 'code_deis' => '9208', 'region_id' => 9]);
        Commune::Create(['name' => 'Los Sauces', 'code_deis' => '9206', 'region_id' => 9]);
        Commune::Create(['name' => 'Collipulli', 'code_deis' => '9202', 'region_id' => 9]);
        Commune::Create(['name' => 'Traiguén', 'code_deis' => '9210', 'region_id' => 9]);
        Commune::Create(['name' => 'Lumaco', 'code_deis' => '9207', 'region_id' => 9]);
        Commune::Create(['name' => 'Victoria', 'code_deis' => '9211', 'region_id' => 9]);
        Commune::Create(['name' => 'Curacautín', 'code_deis' => '9203', 'region_id' => 9]);
        Commune::Create(['name' => 'Lonquimay', 'code_deis' => '9205', 'region_id' => 9]);
        Commune::Create(['name' => 'Renaico', 'code_deis' => '9209', 'region_id' => 9]);
        Commune::Create(['name' => 'Ercilla', 'code_deis' => '9204', 'region_id' => 9]);
        Commune::Create(['name' => 'Castro', 'code_deis' => '10201', 'region_id' => 10]);
        Commune::Create(['name' => 'Ancud', 'code_deis' => '10202', 'region_id' => 10]);
        Commune::Create(['name' => 'Quinchao', 'code_deis' => '10210', 'region_id' => 10]);
        Commune::Create(['name' => 'Quellón', 'code_deis' => '10208', 'region_id' => 10]);
        Commune::Create(['name' => 'Queilén', 'code_deis' => '10207', 'region_id' => 10]);
        Commune::Create(['name' => 'Quemchi', 'code_deis' => '10209', 'region_id' => 10]);
        Commune::Create(['name' => 'Chonchi', 'code_deis' => '10203', 'region_id' => 10]);
        Commune::Create(['name' => 'Dalcahue', 'code_deis' => '10205', 'region_id' => 10]);
        Commune::Create(['name' => 'Puqueldón', 'code_deis' => '10206', 'region_id' => 10]);
        Commune::Create(['name' => 'Curaco de Vélez', 'code_deis' => '10204', 'region_id' => 10]);
        Commune::Create(['name' => 'Coñaripe', 'code_deis' => '14108', 'region_id' => 14]);
    }
}
