<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventarioCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventario_categorias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('inventarios_id')->unsigned()->references('id')->on('inventarios'); //Permite numeros positivos
           
            $table->integer('categorias_id')->unsigned()->references('id')->on('categorias');
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
        Schema::dropIfExists('inventario_categorias');
    }
}
