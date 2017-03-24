<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientsTable extends Migration {

	public function up()
	{
		Schema::create('clients', function(Blueprint $table) {
			$table->increments('id');
                  $table->string('projet', 255)->nullable();
                  $table->string('name_client', 255)->nullable();
                  $table->string('name_responsable_client', 255)->nullable();
                  $table->string('name_responsable_fortil', 255)->nullable();
                  $table->string('name_collaborateur', 255)->nullable();
                  $table->string('fonction_responsable_client', 255)->nullable();
                  $table->string('fonction_responsable_fortil', 255)->nullable();
                  $table->string('fonction_collaborateur', 255)->nullable();
                  $table->string('mail_responsable_client', 255)->nullable();
                  $table->string('mail_responsable_fortil', 255)->nullable();
                  $table->string('mail_collaborateur', 255)->nullable();
                  $table->string('phone_responsable_client', 20)->nullable();
                  $table->string('phone_responsable_fortil', 20)->nullable();
                  $table->string('phone_collaborateur', 20)->nullable();
                  $table->dateTime('debut_mission')->nullable();
                  $table->dateTime('fin_mission')->nullable();
                  $table->dateTime('created_at');
                  $table->dateTime('updated_at');
		});
	}

	public function down()
	{
		Schema::drop('clients');
	}
}
