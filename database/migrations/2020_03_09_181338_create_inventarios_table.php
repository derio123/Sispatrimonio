<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('patrimoniogabinete');
            $table->string('cod_gabinete')->unique();/* Parei aqui */
            $table->string('patrimoniomonitor');
            $table->string('patrimoniomonitor2')->nullable();
            $table->string('cod_monitor')->unique();
            $table->string('cod_monitor2')->unique()->nullable();
            $table->text('descricaoInfo')->nullable();
            $table->string('patrimonioMesa');
            $table->string('cod_Mesa')->unique();
            $table->string('patrimonioCadeira');
            $table->string('cod_Cadeira')->unique();
            $table->string('patrimonioOutro')->nullable();
            $table->string('cod_Outro')->unique()->nullable();
            $table->text('descricaoMoveis')->nullable();
            $table->string('sala');
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
        Schema::dropIfExists('inventarios');
    }
}
