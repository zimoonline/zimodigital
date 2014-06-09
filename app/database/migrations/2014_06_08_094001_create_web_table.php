<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWebTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('webs', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title');
			$table->text('body');
            $table->boolean('thumbpos')->nullable()->default(0);
			$table->string('webthumbnail');
			$table->string('link');
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
		Schema::drop('webs');
	}

}
