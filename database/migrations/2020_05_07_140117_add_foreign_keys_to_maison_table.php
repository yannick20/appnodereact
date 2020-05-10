<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToMaisonTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('maison', function(Blueprint $table)
		{
			$table->foreign('code_ville', 'maison_ibfk_1')->references('code_ville')->on('ville')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('code_quartier', 'maison_ibfk_2')->references('code_quartier')->on('quartier')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('code_pays', 'maison_ibfk_3')->references('code_pays')->on('pays')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_offre', 'maison_ibfk_4')->references('id_offre')->on('type_offre')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('login', 'maison_ibfk_5')->references('login')->on('utilisateur')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('maison', function(Blueprint $table)
		{
			$table->dropForeign('maison_ibfk_1');
			$table->dropForeign('maison_ibfk_2');
			$table->dropForeign('maison_ibfk_3');
			$table->dropForeign('maison_ibfk_4');
			$table->dropForeign('maison_ibfk_5');
		});
	}
}
