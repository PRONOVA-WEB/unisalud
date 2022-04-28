<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTcAppointmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tc_appointments', function (Blueprint $table) {
            $table->id();
            $table->string('episode')->unique();
            $table->string('identificator_patient');
            $table->string('identificator_specialist');
            $table->string('organization_local_code');
            $table->timestamp('date');
            $table->string('duration')->nullable();
            $table->string('type')->nullable();
            $table->string('status');
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
        Schema::dropIfExists('tc_appointment');
    }
}
