<?php

use Illuminate\Database\Migrations\Migration;

class AddTimestampsToGames extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pastes', function($table)
		{
			$table->timestamps();
			$table->renameColumn('raw', 'code');
			$table->dropColumn('created');
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
