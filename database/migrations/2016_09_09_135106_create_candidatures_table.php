<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCandidaturesTable extends Migration {

	public function up()
	{
		Schema::create('candidatures', function(Blueprint $table) {
			$table->increments('id');
			$table->string('sex');
                  $table->string('name');
                  $table->string('first_name');
                  $table->string('email')->unique();
                  $table->string('phone');
                  $table->string('address');
                  $table->string('code_postal');
                  $table->string('city');
                  $table->string('country');
                  $table->string('cv_path');
                  $table->integer('type');
                  $table->integer('id_offer');
                  $table->dateTime('created_at');
                  $table->dateTime('updated_at');
		});
	}

	public function down()
	{
		Schema::drop('candidatures');
	}
}
