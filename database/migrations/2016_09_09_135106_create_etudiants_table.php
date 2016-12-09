<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEtudiantsTable extends Migration {

	public function up()
	{
		Schema::create('etudiants', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('id_users')->unsigned();
			$table->string('nom', 50);
			$table->string('prenom', 50);
			$table->string('adresse', 100);
			$table->string('telephone', 20);
			$table->string('mail', 100);
		});
	}

	public function down()
	{
		Schema::drop('etudiants');
	}
}