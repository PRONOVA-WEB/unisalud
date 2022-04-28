<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganizationLocalSpecialtyTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mp_organization_local_specialty', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('organization_local_id');
            $table->unsignedInteger('specialty_id');

            $table->foreign('organization_local_id')->references('id')->on('mp_organization_local');
            $table->foreign('specialty_id')->references('id')->on('mp_specialties');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('organization_local_specialty_tables');
    }
}
