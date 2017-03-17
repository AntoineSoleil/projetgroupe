<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProfilsTable extends Migration {

	public function up()
	{
		Schema::create('profils', function(Blueprint $table) {
			$table->integer('id_users');
            $table->string('birthday', 50);
            $table->string('adresse', 255);
			$table->integer('code_postal');
            $table->string('ville', 255);
			$table->integer('telephone');
            $table->string('fonction', 255);
			$table->integer('responsable');
            $table->string('entreprise', 255);
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
		});
	}

	public function down()
	{
		Schema::drop('profils');
	}
}
