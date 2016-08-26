<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSuiviPostulantsTable extends Migration {

	public function up()
	{
		Schema::create('suiviPostulants', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('etudiants')->unsigned();
			$table->integer('offreEmploi')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('suiviPostulants');
	}
}