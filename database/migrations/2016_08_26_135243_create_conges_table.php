<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCongesTable extends Migration {

	public function up()
	{
		Schema::create('conges', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('auteur')->unsigned();
			$table->date('creation');
			$table->date('date_debut');
			$table->date('date_fin');
			$table->tinyInteger('validation_rh')->default('0');
		});
	}

	public function down()
	{
		Schema::drop('conges');
	}
}