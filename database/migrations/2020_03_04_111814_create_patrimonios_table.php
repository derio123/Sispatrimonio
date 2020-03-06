<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatrimoniosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patrimonios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('categoria');
            $table->string('computador');
            $table->int('monitor');
            $table->string('Qtd_Monitor');
            $table->string('plenus');
            $table->string('mesa');
            $table->string('gaveteiro');
            $table->string('cadeira');
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
        Schema::drop('patrimonios');
    }
}
