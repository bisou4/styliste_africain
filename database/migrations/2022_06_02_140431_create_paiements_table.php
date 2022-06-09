<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaiementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paiements', function (Blueprint $table) {
            $table->id();
            $table->integer('total');
            $table->integer('avance');
            $table->integer('reste');
            $table->foreign('clients_id')->unsigned();
            $table->foreign('clients_id')->references('id')->on('clients')->delete('update');
            $table->foreign('modeles_id')->references('id')->on('modeles')->delete('update');
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
        Schema::dropIfExists('paiements');
    }
}
