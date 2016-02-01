<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReferenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('referencias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Referencia',7);
            $table->dateTime('FechaRecepcionDocumento');
            $table->string('NumeroBl',25);
            $table->dateTime('FechaRevalidacion');
            $table->dateTime('FechaModulacion');
            $table->string('ReferenciaNumeroFactura',15);
            $table->dateTime('FechaPrevio');
            $table->string('ObservacionPrevio',45);
            $table->dateTime('FechaClasificacion');
            $table->dateTime('FechaEntregaEjecutivo');
            $table->dateTime('FechaAnticipo');
            $table->dateTime('FechaSalidaFFCC');
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
        Schema::drop('referencias');
    }
}
