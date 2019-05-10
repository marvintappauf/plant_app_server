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
            $table->bigInteger('plantId');
            $table->decimal('waterTemperature');
            $table->decimal('temperature1');
            $table->decimal('temperature2');
            $table->decimal('ph');
            $table->decimal('humidity');
            $table->decimal('waterLevel');
            $table->boolean('isFanOn');
            $table->boolean('isLight1On');
            $table->boolean('isLight2On');
            $table->boolean('isWaterPumpOn');
            $table->boolean('isDehumidifierOn');
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');
            $table->string('image4');
            $table->dateTime('date');
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
