<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDroitsTable extends Migration {

	public function up()
	{
		Schema::create('droits', function(Blueprint $table) {
			$table->increments('id');
			$table->string('titre', 100);
			$table->string('description', 255);
		});
	}

	public function down()
	{
		Schema::drop('droits');
	}
}