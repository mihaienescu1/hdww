<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTableStage4 extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			
			$table->engine = 'InnoDB';
			
			$table->increments('id')->unsigned();
			$table->string('first_name', 60);
			$table->string('last_name', 60);	
			$table->string('nick_name', 60);
			$table->string('email', 100);
			$table->string('password', 256);
			
			$table->string('picture', 1024)->default(NULL);
			$table->mediumText('about')->default(NULL);
			
			
			$table->timestamps();
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
