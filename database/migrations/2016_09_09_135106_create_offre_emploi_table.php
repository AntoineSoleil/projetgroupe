<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOffreEmploiTable extends Migration {

	public function up()
	{
		Schema::create('offre_emploi', function(Blueprint $table) {
			$table->increments('id');
			$table->string('intitule');
	        $table->string('description');
	        $table->string('competence_voulue');
	        $table->string('societe');
	        $table->string('contact_phone');
	        $table->string('contact_mail');
	        $table->string('website');
	        $table->dateTime('created_at');
	        $table->dateTime('updated_at');
		});
	}

	public function down()
	{
		Schema::drop('offre_emploi');
	}
}
