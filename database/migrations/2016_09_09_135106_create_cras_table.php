<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCrasTable extends Migration {

	public function up()
	{
		Schema::create('cras', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('id_clients')->nullable();
            $table->string('rapport')->nullable();
            $table->integer('accident_avec_arret')->nullable();
            $table->integer('accident_sans_arret')->nullable();
            $table->integer('accident_trajet')->nullable();
            $table->integer('jours_arret_maladie')->nullable();
            $table->string('absences')->nullable();
            $table->integer('nombre_jours_presence')->nullable();
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
		});
	}

	public function down()
	{
		Schema::drop('cras');
	}
}
