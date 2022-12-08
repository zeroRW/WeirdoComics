<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_ventas_a', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->bigIncrements('idVenta_A');
            $table->unsignedBigInteger('id_VArti');
            $table->foreign('id_VArti')->references('idArticulo')->on('tb_articulos')->onDelete('cascade');
            $table->integer('cantidad');
            $table->string('empleado');
            $table->float('total',8,2);
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
        Schema::dropIfExists('tb_ventas_a');
    }
};
