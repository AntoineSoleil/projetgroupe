<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('commentaires', function($table) {

          $table->increments('id');
          $table->integer('users_id')->length(10)->unsigned();
          $table->integer('actualites_id')->length(10)->unsigned();
          $table->string('content', 255)->nullable();
          $table->dateTime('created_at');
          $table->dateTime('updated_at');

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('commentaires');
    }
}
