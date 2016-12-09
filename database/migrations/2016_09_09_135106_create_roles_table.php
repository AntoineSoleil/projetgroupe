<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRolesTable extends Migration {

	public function up()
	{
		Schema::create('roles', function(Blueprint $table) {
			$table->increments('id');
			$table->string('titre', 100);
			$table->string('description', 255);
		});
	}

	public function down()
	{
		Schema::drop('roles');
	}
}