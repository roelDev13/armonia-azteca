<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VentaInstrumento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventaIntrumento', function (Blueprint $table) {
            $table->increments('idVentaInstrumentos');
            $table->string('instrumento');
            $table->string('color');
            $table->bigInteger('cantidad');
            $table->double('precio');
            $table->double('total');
            $table->string('empleado');
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
        Schema::dropIfExists('ventaIntrumento');
    }
}
