<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaisonTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('maison', function(Blueprint $table)
		{
			$table->increments('id_maison');
			$table->unsignedInteger('code_ville')->index('code_ville');
			$table->unsignedInteger('code_quartier')->index('code_quartier');
			$table->unsignedInteger('code_pays')->index('code_pays');
			$table->unsignedInteger('id_offre')->index('id_offre');
			$table->string('login')->index('login');
			$table->unsignedInteger('surface');
			$table->unsignedInteger('surface_sejour');
			$table->unsignedInteger('nbre_pieces');
			$table->string('etat_du_bien');
			$table->string('precision');
			$table->string('indication_geographique');
			$table->string('observation');
			$table->unsignedInteger('prix_min');
			$table->unsignedInteger('prix_max');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('maison');
	}
}
