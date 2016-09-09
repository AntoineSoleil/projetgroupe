<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->increments('id');
			$table->string('username', 50);
			$table->string('password', 50);
			$table->smallInteger('secteur');
		});
	}

	public function down()
	{
		Schema::drop('users');
	}
}