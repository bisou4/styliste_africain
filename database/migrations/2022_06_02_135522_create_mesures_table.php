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
            $table->decimal('tour_poitrine')->nullable();
            $table->decimal('tour_manche')->nullable();
            $table->decimal('tour_cuisse')->nullable();
            $table->decimal('tour_genoux')->nullable();
            $table->decimal('tour_bras')->nullable();
            $table->decimal('tour_poignet')->nullable();
            $table->decimal('tour_bassin')->nullable();
            $table->decimal('tour_mollet')->nullable();
            $table->decimal('tour_cheville')->nullable();
            $table->decimal('hauteur_poitrine')->nullable();
            $table->decimal('hauteur_pointe_sein')->nullable();
            $table->decimal('hauteur_taille_sol')->nullable();
            $table->decimal('longueur_epaule')->nullable();
            $table->decimal('longueur_milieu_dos')->nullable();
            $table->decimal('longueur_entrejambe_sol')->nullable();
            $table->decimal('carrure_devant')->nullable();
            $table->unsignedBigInteger('clients_id')->unsigned();
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
