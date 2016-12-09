<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCongesTable extends Migration {

	public function up()
	{
		Schema::create('conges', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nom', 50);
			$table->string('prenom', 50);
			$table->string('fonction', 255);
			$table->string('lieuInter', 255);
			$table->string('responsable', 100);
			$table->date('date_debut');
			$table->date('date_fin');
			$table->integer('nombre_jours')->unsigned();
			$table->string('type_conges', 100);
			$table->date('date_creation');
			$table->date('lieu_creation');
			$table->tinyInteger('signature');
		});
	}

	public function down()
	{
		Schema::drop('conges');
	}
}