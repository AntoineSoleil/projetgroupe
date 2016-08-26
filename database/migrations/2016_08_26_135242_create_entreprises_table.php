<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEntreprisesTable extends Migration {

	public function up()
	{
		Schema::create('entreprises', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('id_users')->unsigned();
			$table->string('nom_entreprise', 100);
			$table->string('adresse-entreprise', 100);
			$table->string('telephone_entreprise', 20);
			$table->string('nom', 50);
			$table->string('prenom', 50);
			$table->string('poste', 255);
			$table->string('telephone', 20);
			$table->string('mail', 100);
		});
	}

	public function down()
	{
		Schema::drop('entreprises');
	}
}