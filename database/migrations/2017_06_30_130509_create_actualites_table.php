<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActualitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('actualites', function($table) {

          $table->increments('id');
          $table->string('subject', 255)->nullable();
          $table->string('content', 255)->nullable();
          $table->integer('users_id')->length(10)->unsigned();
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
        Schema::drop('actualites');
    }
}
