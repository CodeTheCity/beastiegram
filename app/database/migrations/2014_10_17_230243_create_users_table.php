<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('email', 50)->nullable()->default('');
			$table->string('username', 20)->nullable()->default('');
			$table->string('password', 60)->nullable()->default('');
			$table->string('password_temp', 60)->nullable()->default('');
			$table->string('code', 60)->nullable()->default('');
			$table->timestamps();
			$table->integer('active')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
