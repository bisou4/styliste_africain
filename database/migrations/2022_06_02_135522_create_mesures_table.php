<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMesuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mesures', function (Blueprint $table) {
            $table->id();
            $table->decimal('tour_poitrine');
            $table->decimal('tour_manche');
            $table->decimal('tour_cuisse');
            $table->decimal('tour_genoux');
            $table->decimal('tour_bras');
            $table->decimal('tour_poignet');
            $table->decimal('tour_bassin');
            $table->decimal('tour_mollet');
            $table->decimal('tour_cheville');
            $table->decimal('hauteur_poitrine');
            $table->decimal('hauteur_pointe_sein');
            $table->decimal('hauteur_taille_sol');
            $table->decimal('longueur_epaule');
            $table->decimal('longueur_milieu_dos');
            $table->decimal('longueur_entrejambe_sol');
            $table->decimal('carrure_devant');
            $table->foreign('clients_id')->unsigned();
            $table->foreign('clients_id')->references('id')->on('clients')->delete('update');
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
        Schema::dropIfExists('mesures');
    }
}
