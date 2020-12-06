<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VentaComponente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventaComponenete', function (Blueprint $table) {
            $table->increments('idVentaComponente');
            $table->string('componente');
            $table->string('instrumento');
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
        Schema::dropIfExists('ventaComponenete');
    }
}
