<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRolesRessourcesTable extends Migration {

	public function up()
	{
		Schema::create('roles_ressources', function(Blueprint $table) {
			$table->integer('id_roles')->unsigned();
			$table->integer('id_ressources')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('users_roles');
	}
}
