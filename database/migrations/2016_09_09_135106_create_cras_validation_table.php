<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	public function up()
	{
		Schema::create('cras_validation', function(Blueprint $table) {
			$table->increments('id');
            $table->string('signature_client');
            $table->string('signature_fortil');
            $table->string('signature_consultant');
            $table->dateTime('date_signature_client');
            $table->dateTime('date_signature_fortil');
            $table->dateTime('date_signature_consultant');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
		});
	}

	public function down()
	{
		Schema::drop('cras_validation');
	}
}
