<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCongesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conges', function($table) {
            $table->increments('id');
            $table->integer('id_users')->unsigned();
            $table->string('lieu_intervention', 255);
            $table->string('responsable', 255);
            $table->date('debutConges')->nullable;
            $table->date('finConges')->nullable;
            $table->string('type', 255);
            $table->string('lieuCreation', 255);
            $table->string('DateCreation', 255);
            $table->string('Signature', 255);
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
        Schema::drop('conges');
    }
}
