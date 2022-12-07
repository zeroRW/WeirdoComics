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
        Schema::create('tb_pedidos_comic', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->bigIncrements('idPedidoC');
            $table->unsignedBigInteger('id_Prov');
            $table->foreign('id_Prov')->references('idProveedor')->on('tb_proveedores')->onDelete('cascade');
            $table->unsignedBigInteger('id_Comic');
            $table->foreign('id_Comic')->references('idComics')->on('tb_comics')->onDelete('cascade');
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
        Schema::dropIfExists('tb_pedidos_comic');
    }
};
