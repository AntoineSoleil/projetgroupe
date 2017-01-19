<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->increments('id');
            $table->string('name');
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('birthday')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
		});
	}

	public function down()
	{
		Schema::drop('users');
	}
}
