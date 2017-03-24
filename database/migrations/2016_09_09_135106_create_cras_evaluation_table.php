<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	public function up()
	{
		Schema::create('cras_evaluation', function(Blueprint $table) {
			$table->increments('id');
            $table->integer('satisfaction_client');
            $table->integer('satisfaction_consultant');
            $table->string('ameliorations');
            $table->string('actions_restantes');
            $table->string('commentaires');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
		});
	}

	public function down()
	{
		Schema::drop('cras_evaluation);
	}
}
