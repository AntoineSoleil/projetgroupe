<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCrasTable extends Migration {

	public function up()
	{
		Schema::create('cras', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('auteur')->unsigned();
			$table->string('client', 50);
			$table->text('contenu');
			$table->date('creation');
			$table->tinyInteger('validation_client');
			$table->tinyInteger('validation_rh');
		});
	}

	public function down()
	{
		Schema::drop('cras');
	}
}