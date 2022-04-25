<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devices', function (Blueprint $table) {
            $table->id();
            $table->string('identifier');
            $table->string('definition')->nullable();
            $table->enum('status', ['active', 'inactive']);
            $table->string('manufacturer')->nullable();
            $table->date('manufacturer_date')->nullable();
            $table->date('expiration_date')->nullable();
            $table->string('lot_number')->nullable();
            $table->string('serial_number')->nullable();
            $table->string('device_name')->nullable();
            $table->string('model_number')->nullable();
            $table->string('part_number')->nullable();
            $table->string('type')->nullable();
            $table->string('specialization')->nullable();
            // $table->foreignId('pacient_id');
            // $table->foreign('pacient_id')->references('id')->on('users');
            $table->foreignId('organization_id')->nullable();
            $table->foreign('organization_id')->references('id')->on('organizations');
            // $table->foreignId('location_id')->nullable();
            // $table->foreign('location_id')->references('id')->on('locations');
            $table->string('note')->nullable();
            $table->foreignId('parent_id')->nullable();
            $table->foreign('parent_id')->references('id')->on('devices');
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
        Schema::dropIfExists('devices');
    }
}
