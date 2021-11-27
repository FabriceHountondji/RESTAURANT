<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientCommandeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_commande', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quantite');
            $table->unsignedInteger('client_id');
            $table->foreign('client_id')->references('id')->on('users');
            $table->unsignedInteger('commande_id');
            $table->foreign('commande_id')->references('id')->on('commandes');
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
        Schema::dropIfExists('client_commande');
    }
}
