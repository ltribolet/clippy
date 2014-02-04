<?php

use Illuminate\Database\Migrations\Migration;

class AddLanguageTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('languages', function($table)
		{
			$table->increments('id');
			$table->string('name', 64);
			$table->string('safe_name', 64);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('languages');
	}

}
