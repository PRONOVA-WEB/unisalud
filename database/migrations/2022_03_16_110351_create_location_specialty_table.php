<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationSpecialtyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('location_specialty', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('specialty_id')->nullable();
            $table->foreignId('location_id')->nullable();

            $table->foreign('specialty_id')->references('id')->on('mp_specialties');
            $table->foreign('location_id')->references('id')->on('locations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('location_specialty');
    }
}
