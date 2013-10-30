<?php

use Illuminate\Database\Migrations\Migration;

class Pastes extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pastes', function($table)
		{
			$table->increments('id');
			$table->string('pid', 8)->index();
			$table->string('title', 32);
			$table->string('author', 32);
			$table->string('language', 32);
			$table->tinyInteger('private')->index();
			$table->longText('raw');
			$table->timestamp('created')->index();
			$table->timestamp('expire');
			$table->tinyInteger('toexpire')->unsigned();
			$table->string('snipurl', 64);
			$table->string('replyto', 8)->index();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pastes');
	}

}
