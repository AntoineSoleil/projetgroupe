<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRolesSectionsDroitsTable extends Migration {

	public function up()
	{
		Schema::create('roles_sections_droits', function(Blueprint $table) {
			$table->integer('id_roles')->unsigned();
			$table->integer('id_section')->unsigned();
			$table->integer('id_droits')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('roles_sections_droits');
	}
}