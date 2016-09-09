<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActualitesTable extends Migration {

	public function up()
	{
		Schema::create('actualites', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('auteur')->unsigned();
			$table->string('titre', 100);
			$table->text('contenu');
			$table->date('creation');
			$table->tinyInteger('validation')->default('0');
		});
	}

	public function down()
	{
		Schema::drop('actualites');
	}
}