<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNotesFraisTable extends Migration {

	public function up()
	{
		Schema::create('notes_frais', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('auteur')->unsigned();
			$table->string('description', 255);
			$table->mediumInteger('euro');
			$table->date('creation');
			$table->smallInteger('validation_rh')->default('0');
		});
	}

	public function down()
	{
		Schema::drop('notes_frais');
	}
}