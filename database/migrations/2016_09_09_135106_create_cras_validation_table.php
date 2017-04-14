<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCrasValidationTable extends Migration {

	public function up()
	{
		Schema::create('cras_validation', function(Blueprint $table) {
			$table->increments('id');
            $table->integer('status')->nullable();
            $table->string('signature_client')->nullable();
            $table->string('signature_fortil')->nullable();
            $table->string('signature_consultant')->nullable();
            $table->dateTime('date_signature_client')->nullable();
            $table->dateTime('date_signature_fortil')->nullable();
            $table->dateTime('date_signature_consultant')->nullable();
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
		});
	}

	public function down()
	{
		Schema::drop('cras_validation');
	}
}
