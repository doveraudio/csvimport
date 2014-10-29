<?php

use \Illuminate\Database\Schema\Blueprint;
use \Illuminate\Database\Migrations\Migration;
use \Illuminate\Database\Connection;
class CreateUploadsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                DB::connection('codes');
                Schema::dropIfExists('uploads');
		Schema::create('uploads', function($table)
                {
                    $table->increments('id');
                    $table->string('filename',256);
                    $table->string('columns');
                    $table->string('fieldDelimiter');
                    $table->string('fieldEnclosed');
                    $table->string('fieldEscaped');
                    $table->string('lineDelimiter');
                    $table->string('ignoreLines');
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
		Schema::dropIfExists('uploads');
	}

}
