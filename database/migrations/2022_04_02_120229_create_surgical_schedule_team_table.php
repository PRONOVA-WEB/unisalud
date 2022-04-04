<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurgicalScheduleTeamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surgical_schedule_team', function (Blueprint $table) {
            $table->id();
            $table->foreignId('surgical_schedule_id')->nullable();
            $table->foreignId('practitioner_id');
            $table->string('type');
            $table->unsignedInteger('specialty_id');
            $table->foreign('practitioner_id')->references('id')->on('practitioners');
            $table->foreign('specialty_id')->references('id')->on('mp_specialties');
            $table->foreign('surgical_schedule_id')->references('id')->on('surgical_schedule');
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
        Schema::dropIfExists('surgical_schedule_team');
    }
}
