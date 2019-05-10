<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PlantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('plantSpecies');
            $table->string('plantFamily');
            $table->string('genus');
            $table->string('description');
            $table->string('rootLevel');
            $table->string('maxGrowth');
            $table->string('plantCompatibility');
            $table->dateTime('currentDate');
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
        //
    }
}
