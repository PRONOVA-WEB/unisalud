<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PermissionSeeder::class,
            CodConIdentifiersTypesSeeder::class,
            CountrySeeder::class,
            RegionSeeder::class,
            CodConMaritalSeeder::class,
            CommuneSeeder::class,
            CongregationSeeder::class,
            UserSeeder::class,
            CodConObservationCategorySeeder::class,
<<<<<<< HEAD
            CodingsSeeder::class,
            CodConPhysicalTypes::class,
            HoursOfOperationSeeder::class,
            // PractitionerSeeder::class,
            // // HmRrhhTableSeeder::class,
        // HmMotherActivityTableSeeder::class,
        // HmActivityTypesTableSeeder::class,
        // HmActivitiesTableSeeder::class,
        // HmSpecialtiesTableSeeder::class,
        // HmSpecialtyActivitiesTableSeeder::class,
        // HmProfessionsTableSeeder::class,
        // HmProfessionActivitiesTableSeeder::class,
        // HmOperatingRoomsTableSeeder::class,
        // HmOperatingRoomSpecialties::class,
        // HmServicesTableSeeder::class,
            // HmUserServicesTableSeeder::class,
            // HmContractsTableSeeder::class,
            // // HmUnscheduledProgrammingTableSeeder::class,
        // HmUserSpecialtiesTableSeeder::class,
        // HmUserProfessionsTableSeeder::class,
            // // HmTheoreticalProgrammingTableSeeder::class,
            // HmOperatingRoomProgrammingTableSeeder::class,
            //PractitionerSeeder::class,
        // ExtMedicineSeeder::class,
=======
>>>>>>> a022a96b1cadcff4ab0681a5545a636d10ad4311
            CodConAppointmentTypesSeeder::class,
            SicStatusesSeeder::class,
            SexSeeder::class,
            GenderSeeder::class,

            //Organización
            OrganizationTypeSeeder::class,
            OrganizationDependencySeeder::class,
            OrganizationServiceSeeder::class,
            OrganizationSeeder::class,

            //necesita Organization por eso se debe ejecutar después
            LocationSeeder::class,
            LocationHourOfOperationSeeder::class,

            /* SAMU */
<<<<<<< HEAD
            // SamuMobileSeeder::class,
            // SamuJobTypeSeeder::class,
            // SamuKeySeeder::class,
            // SamuReceptionPlaceSeeder::class,
            // SamuEstablishmentSeeder::class,

            SettingSeeder::class,

=======
            SamuMobileTypeSeeder::class,
            SamuMobileSeeder::class,
            SamuJobTypeSeeder::class,
            SamuKeySeeder::class,
            SamuReceptionPlaceSeeder::class,
            SamuEstablishmentSeeder::class,
>>>>>>> a022a96b1cadcff4ab0681a5545a636d10ad4311
        ]);

        if (\App::environment(['local', 'testing'])) {
            $this->call([
                MpMotherActivitiesTableSeeder::class,
                MpActivityTypesTableSeeder::class,
                MpActivitiesTableSeeder::class,
                MpOperatingRoomsTableSeeder::class,
                MpProfessionsTableSeeder::class,
                MpProfessionActivitiesTableSeeder::class,
                MpServicesTableSeeder::class,
                MpSpecialtiesTableSeeder::class,
                MpSpecialtyActivitiesTableSeeder::class,
                MpSubActivitiesTableSeeder::class,
                MpUserSpecialtiesTableSeeder::class,
                MpUserProfessionsTableSeeder::class,
                UsersTestSeeder::class,
                MpContractsTableSeeder::class,
                MpProgrammingProposalsTableSeeder::class,
                MpProgrammingProposalsSignatureFlowTableSeeder::class,
                MpProgrammingProposalsDetailTableSeeder::class,
                AppointmentsTableSeeder::class,
                AppointablesTableSeeder::class,
            ]);
        }
    }
}
