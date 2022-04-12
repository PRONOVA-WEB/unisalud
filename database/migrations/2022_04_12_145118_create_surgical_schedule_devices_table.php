<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurgicalScheduleDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surgical_schedule_devices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('surgical_schedule_id')->nullable();
            $table->foreignId('device_id')->nullable();
            $table->foreign('device_id')->references('id')->on('devices');
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
        Schema::dropIfExists('surgical_schedule_devices');
    }
}
