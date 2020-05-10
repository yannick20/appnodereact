<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToQuartierTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('quartier', function(Blueprint $table)
		{
			$table->foreign('code_ville', 'quartier_ibfk_1')->references('code_ville')->on('ville')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('quartier', function(Blueprint $table)
		{
			$table->dropForeign('quartier_ibfk_1');
		});
	}
}
