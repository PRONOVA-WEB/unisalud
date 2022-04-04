<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurgicalScheduleEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surgical_schedule_events', function (Blueprint $table) {
            $table->id();
            $table->foreignId('surgical_schedule_id')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->foreign('surgical_schedule_id')->references('id')->on('surgical_schedule');
            $table->foreign('user_id')->references('id')->on('users');
            $table->text('observations')->nullable();
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
        Schema::dropIfExists('surgical_schedule_events');
    }
}
