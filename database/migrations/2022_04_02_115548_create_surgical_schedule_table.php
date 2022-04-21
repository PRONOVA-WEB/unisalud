<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurgicalScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surgical_schedule', function (Blueprint $table) {
            $table->id();
            $table->foreignId('location_id')->nullable();
            $table->date('date');
            $table->integer('from');
            $table->integer('to');
            $table->string('surgery');
            $table->foreignId('pacient_id');
            $table->text('observations');
            $table->string('preoperative_diagnosis');
            $table->string('status')->default('agendado');
            $table->foreign('pacient_id')->references('id')->on('users');
            $table->foreign('location_id')->references('id')->on('locations');
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
        Schema::dropIfExists('surgical_schedule');
    }
}
