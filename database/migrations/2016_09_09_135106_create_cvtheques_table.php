<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCvthequesTable extends Migration {

	public function up()
	{
		Schema::create('cvtheques', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('auteur')->unsigned();
			$table->string('cv', 255);
			$table->date('creation');
			$table->date('modification');
			$table->tinyInteger('statut');
			$table->tinyInteger('published');
		});
	}

	public function down()
	{
		Schema::drop('cvtheques');
	}
}