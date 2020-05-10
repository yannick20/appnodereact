<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemarcheurTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('demarcheur', function(Blueprint $table)
		{
			$table->string('email', 30)->primary();
			$table->unsignedInteger('code_pays')->index('fk_code_pays');
			$table->string('Nom', 50);
			$table->string('prenom', 50);
			$table->string('societe', 80)->nullable();
			$table->string('tel1', 50);
			$table->string('tel2', 50);
			$table->string('siege_indi_geo', 100);
			$table->string('identifiant_fiscal', 20)->nullable();
			$table->integer('chemin_fichier')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('demarcheur');
	}
}
