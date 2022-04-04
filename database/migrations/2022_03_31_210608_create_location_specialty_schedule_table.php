<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationSpecialtyScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('location_schedule', function (Blueprint $table) {
            $table->id();
            $table->foreignId('location_id')->nullable();
            $table->foreign('location_id')->references('id')->on('locations');
            $table->date('from');
            $table->date('to');
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('location_specialty_schedule');
    }
}
