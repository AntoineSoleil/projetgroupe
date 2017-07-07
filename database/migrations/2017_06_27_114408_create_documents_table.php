<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function($table) {

            $table->increments('id');
            $table->string('filename', 255)->nullable();
            $table->string('mime', 255)->nullable();
            $table->string('name', 255)->nullable();
            $table->string('description', 255)->nullable();
            $table->integer('id_users')->unsigned();
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
        Schema::drop('documents');
    }
}
