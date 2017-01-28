<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Event extends Migration
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
            $table->string('EName');
            $table->string('ELocation');
            $table->date('EStartDate');
            $table->date('EStopDate');
            $table->time('EStartTime');
            $table->time('EStopTime');
            $table->float('EMaxParticipants');
            $table->float('ECountParticipants');
            $table->text('EDescription');
            
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
