<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDemarcheurTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('demarcheur', function(Blueprint $table)
		{
			$table->foreign('code_pays', 'fk_code_pays')->references('code_pays')->on('pays')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('demarcheur', function(Blueprint $table)
		{
			$table->dropForeign('fk_code_pays');
		});
	}
}
