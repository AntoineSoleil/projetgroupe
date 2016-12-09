<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOffreEmploisTable extends Migration {

	public function up()
	{
		Schema::create('offreEmplois', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('auteur')->unsigned();
			$table->string('titre', 255);
			$table->text('description');
			$table->text('tags');
			$table->tinyInteger('published')->default('0');
			$table->tinyInteger('disponibilite')->default('1');
			$table->date('creation');
		});
	}

	public function down()
	{
		Schema::drop('offreEmplois');
	}
}