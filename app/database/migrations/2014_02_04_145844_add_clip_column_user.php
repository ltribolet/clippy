<?php

use Illuminate\Database\Migrations\Migration;

class AddClipColumnUser extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('clips', function($table)
		{
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('clips', function($table)
		{
			$table->dropForeign('clips_user_id_foreign');
			$table->dropColumn('user_id');
		});
	}

}
