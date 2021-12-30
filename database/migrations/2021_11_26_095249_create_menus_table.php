<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('label');
            $table->integer('prix');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedInteger('plat_id');
            $table->foreign('plat_id')->references('id')->on('plats');
            $table->unsignedInteger('accompagnement_id');
            $table->foreign('accompagnement_id')->references('id')->on('accompagnements');
            $table->unsignedInteger('boisson_id');
            $table->foreign('boisson_id')->references('id')->on('boissons');
            $table->unsignedInteger('sauce_id');
            $table->foreign('sauce_id')->references('id')->on('sauces');
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
        Schema::dropIfExists('menus');
    }
}
