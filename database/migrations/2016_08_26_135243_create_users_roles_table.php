<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersRolesTable extends Migration {

	public function up()
	{
		Schema::create('users_roles', function(Blueprint $table) {
			$table->integer('id_users')->unsigned();
			$table->integer('id_roles')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('users_roles');
	}
}