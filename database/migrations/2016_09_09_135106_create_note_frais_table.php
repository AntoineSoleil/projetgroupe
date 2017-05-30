<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNoteFraisTable extends Migration {

	public function up()
	{
		Schema::create('note_frais', function(Blueprint $table) {
			$table->increments('id');
            $table->string('id_createur');
            $table->string('titre');
            $table->string('description')->nullable();
            $table->string('montant')->nullable();
            $table->string('responsable')->nullable();
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
		});
	}

	public function down()
	{
		Schema::drop('note_frais');
	}
}
