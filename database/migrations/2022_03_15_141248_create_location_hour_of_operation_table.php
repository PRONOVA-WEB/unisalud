<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationHourOfOperationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('location_hour_of_operation', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hours_of_operation_id')->nullable();
            $table->foreignId('location_id')->nullable();

            $table->foreign('hours_of_operation_id')->references('id')->on('hours_of_operation');
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
        Schema::dropIfExists('location_hour_of_operation');
    }
}
