<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToVilleTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ville', function(Blueprint $table)
		{
			$table->foreign('code_pays', 'ville_ibfk_1')->references('code_pays')->on('pays')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ville', function(Blueprint $table)
		{
			$table->dropForeign('ville_ibfk_1');
		});
	}
}
