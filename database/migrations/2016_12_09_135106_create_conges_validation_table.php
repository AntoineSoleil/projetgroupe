<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCongesValidationTable extends Migration {

	public function up()
	{
		Schema::create('conges_validation', function(Blueprint $table) {
			$table->integer('conges_id')->unsigned();
			$table->boolean('validation');
			$table->date('date_responsable');
			$table->string('signature_responsable', 255);
			$table->date('date_dirigeant');
			$table->string('signature_dirigeant', 255);
			$table->varchar('commentaire_refus', 255);
		});
	}

	public function down()
	{
		Schema::drop('conges_validation');
	}
}