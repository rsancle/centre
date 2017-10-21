<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('category');
            $table->string('title');
            $table->string('gender');
            $table->string('description');
            $table->string('director');
            $table->string('regidor');
            $table->string('iluminacio');
            $table->string('sound');
            $table->string('perruquerria');
            $table->string('vestuari');
            $table->string('tramoies');
            $table->string('altres');
            $table->string('actors');
            $table->boolean('status')->default(0);
            $table->boolean('outstanding')->default(0);
            $table->boolean('break')->default(0);
            $table->integer('chairs')->default(350);
            $table->string('language');
            $table->string('time');
            $table->string('date1');
            $table->string('date2');
            $table->string('date3');
            $table->string('date4');
            $table->string('imageFirst');
            $table->string('imageSecond');
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
        Schema::dropIfExists('events');
    }
}
