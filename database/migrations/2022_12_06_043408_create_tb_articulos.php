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
        Schema::create('tb_articulos', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->bigIncrements('idArticulo');
            $table->string('tipo',100);
            $table->string('marca',100);
            $table->string('descripcion');
            $table->integer('cantidad',5);
            $table->float('precio_compra',8,2);
            $table->float('precio_venta',8,2);
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
        Schema::dropIfExists('tb_articulos');
    }
};
