<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaInteressado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interessado', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->string('nome');
            $table->string('telefone');
            $table->string('email');
            $table->string('descricao');
            $table->string('tipo_interessado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('interessado');
    }
}
