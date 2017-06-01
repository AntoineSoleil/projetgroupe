<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCandidaturesOffresTable extends Migration {

	public function up()
	{
		Schema::create('candidatures_offres', function(Blueprint $table) {
			$table->integer('id_offres')->unsigned();
			$table->integer('id_candidatures')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('candidatures_offres');
	}
}
