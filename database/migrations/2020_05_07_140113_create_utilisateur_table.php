<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtilisateurTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('utilisateur', function(Blueprint $table)
		{
			$table->string('login')->primary();
			$table->string('motdepasse', 100);
			$table->dateTime('date_activation_compte')->nullable();
			$table->dateTime('date_desactivation_compte')->nullable();
			$table->integer('numero_profil');
			$table->integer('numero_statutcompte')->nullable();
			$table->string('nom', 55);
			$table->string('prenom', 55);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('utilisateur');
	}
}
