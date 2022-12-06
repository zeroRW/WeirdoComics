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
        Schema::create('tb_proveedores', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->bigIncrements('idProveedor');
            $table->string('empresa',100);
            $table->string('direccion');
            $table->string('pais',50);
            $table->string('contacto',100);
            $table->string('no_fijo',10);
            $table->string('no_celu',10);
            $table->string('correo',100);
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
        Schema::dropIfExists('tb_proveedores');
    }
};
