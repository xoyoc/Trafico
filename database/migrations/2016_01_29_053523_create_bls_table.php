<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bls', function (Blueprint $table) {
            $table->increments('id');
            $table->string('NumeroBl',25);
            $table->string('Contenedor',8);
            $table->integer('Peso');
            $table->integer('Bulto');
            $table->dateTime('FechaEta');
            $table->dateTime('FechaEntregaBl');
            $table->string('Naviera',20);
            $table->dateTime('FechaEntregaTransporte');
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
        Schema::drop('bls');
    }
}
