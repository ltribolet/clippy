<?php

use Illuminate\Database\Migrations\Migration;

class RenamePastesClips extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::rename('pastes', 'clips');
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::rename('clips', 'pastes');
	}

}
