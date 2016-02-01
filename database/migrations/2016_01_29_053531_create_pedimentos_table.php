<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedimentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedimentos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('NumeroPedimento');
            $table->integer('ClaveAduana');
            $table->string('PedimentoReferencia');
            $table->dateTime('FechaPagoValidacion');
            $table->string('Rrc',15);
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
        Schema::drop('pedimentos');
    }
}
