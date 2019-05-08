<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PlantAttribute extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plant_attribute', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('datum');
            $table->date('uhrzeit');
            $table->decimal('temp');
            $table->decimal('humidity');
            $table->decimal('waterlevel');
            $table->string('waterLevelStatus');
            $table->decimal('plantId');
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
        Schema::dropIfExists('plant_attribute');
    }
}
