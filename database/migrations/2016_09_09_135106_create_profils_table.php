<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProfilsTable extends Migration {

	public function up()
	{
		Schema::create('profils', function(Blueprint $table) {
			$table->integer('id_users');
            $table->string('birthday', 50)->nullable();
            $table->string('adresse', 255)->nullable();
			$table->integer('code_postal')->nullable();
            $table->string('ville', 255)->nullable();
			$table->integer('telephone')->nullable();
            $table->string('fonction', 255)->nullable();
			$table->integer('responsable')->nullable();
            $table->string('entreprise', 255)->nullable();
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
		});
	}

	public function down()
	{
		Schema::drop('profils');
	}
}
