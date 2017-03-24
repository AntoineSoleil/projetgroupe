<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCrasEvaluationTable extends Migration {

	public function up()
	{
		Schema::create('cras_evaluation', function(Blueprint $table) {
			$table->increments('id');
            $table->integer('satisfaction_client')->nullable();
            $table->integer('satisfaction_consultant')->nullable();
            $table->string('ameliorations')->nullable();
            $table->string('actions_restantes')->nullable();
            $table->string('commentaires')->nullable();
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
		});
	}

	public function down()
	{
		Schema::drop('cras_evaluation');
	}
}
