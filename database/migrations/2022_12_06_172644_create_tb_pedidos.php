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
        Schema::create('tb_pedidos', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->bigIncrements('idPedido');
            $table->integer('id_Prov')->unsigned();
            $table->foreign('id_Prov')->references('idProveedor')->on('tb_proveedores')->onDelete('cascade');
            $table->integer('id_Arti')->unsigned();
            $table->foreign('id_Arti')->references('idArticulo')->on('tb_articulos')->onDelete('cascade');
            $table->integer('cantidad');
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
        Schema::dropIfExists('tb_pedidos');
    }
};
