<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocatMaisonTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('locat_maison', function(Blueprint $table)
		{
			$table->increments('id_maison');
			$table->unsignedInteger('surface');
			$table->unsignedInteger('surface_sejour');
			$table->unsignedInteger('nbre_pieces');
			$table->tinyInteger('independante');
			$table->string('titre_offre');
			$table->string('indication_geographique');
			$table->string('observation');
			$table->unsignedInteger('prix_min');
			$table->unsignedInteger('code_ville')->index('code_ville');
			$table->unsignedInteger('code_quartier')->nullable()->index('code_quartier');
			$table->unsignedInteger('code_pays')->index('code_pays');
			$table->string('login')->index('login');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('locat_maison');
	}
}
