<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSectionSitesTable extends Migration {

	public function up()
	{
		Schema::create('section_sites', function(Blueprint $table) {
			$table->increments('id');
			$table->string('titre', 100);
			$table->string('description', 255);
		});
	}

	public function down()
	{
		Schema::drop('section_sites');
	}
}