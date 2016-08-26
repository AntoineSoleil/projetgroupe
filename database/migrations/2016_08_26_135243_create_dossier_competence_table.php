<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDossierCompetenceTable extends Migration {

	public function up()
	{
		Schema::create('dossier_competence', function(Blueprint $table) {
			$table->increments('id');
		});
	}

	public function down()
	{
		Schema::drop('dossier_competence');
	}
}