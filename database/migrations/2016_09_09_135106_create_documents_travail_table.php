<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDocumentsTravailTable extends Migration {

	public function up()
	{
		Schema::create('documents_travail', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('auteur')->unsigned();
			$table->string('lien', 100);
		});
	}

	public function down()
	{
		Schema::drop('documents_travail');
	}
}