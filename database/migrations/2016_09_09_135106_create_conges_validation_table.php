<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCongesValidationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conges_validation', function($table) {
            $table->increments('id');
            $table->integer('id_cras')->unsigned();
            $table->integer('status')->nullable();
            $table->dateTime('date_signature_responsable')->nullable();
            $table->string('signature_responsable', 255)->nullable();
            $table->dateTime('date_signature_dirigeant')->nullable();
            $table->string('signature_dirigeant', 255)->nullable();
            $table->text('commentaire')->nullable();
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
        Schema::drop('conges_validation');
    }
}
