<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoteFraisValidationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('note_frais_validation', function($table) {
            $table->increments('id');
            $table->integer('id_note_frais')->unsigned();
            $table->integer('status')->nullable();
            $table->string('commentaire')->nullable();
            $table->string('signature_responsable', 255)->nullable();
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
        Schema::drop('note_frais_validation');
    }
}
