<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePPlantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::create('p_plants', function( Blueprint $table) {
		$table->increments('id');
		$table->string('name');
		$table->decimal('temperatur');
		$table->string('phase');
		$table->string('ph');
		$table->string('type');
		$table->string('height');
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
        Schema::dropIfExists('p_plants');
    }
}
