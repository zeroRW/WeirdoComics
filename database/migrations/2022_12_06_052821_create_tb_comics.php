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
        Schema::create('tb_comics', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->bigIncrements('idComics');
            $table->string('nombre',100);
            $table->string('edicionComic',100);
            $table->binary('imagenCo')->nullable();
            $table->string('compania', 100);
            $table->integer('cantidad');
            $table->float('precioCompra',10,2);
            $table->float('precioVenta',10,2);
            $table->date('fechaCo');
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
        Schema::dropIfExists('tb_comics');
    }
};
