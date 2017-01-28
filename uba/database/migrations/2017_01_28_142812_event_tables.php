<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EventTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('Eid');
            $table->string('EName')->nullable();
            $table->string('ELocation')->nullable();
            $table->date('EStartDate')->nullable();
            $table->date('EStopDate')->nullable();
            $table->time('EStartTime')->nullable();
            $table->time('EStopTime')->nullable();
            $table->float('EMaxParticipants')->nullable();
            $table->float('ECountParticipants')->nullable();
            $table->text('EDescription')->nullable();
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
        Schema::drop('events');
    }
}
