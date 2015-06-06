<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// creating shema for questions table
		Schema::create('questions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('content');
			$table->string('to');
			$table->string('from');
			$table->integer('votes')->nullable();
			$table->enum('status', array('pending','answered','notanswered'));
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
		//
	}

}
