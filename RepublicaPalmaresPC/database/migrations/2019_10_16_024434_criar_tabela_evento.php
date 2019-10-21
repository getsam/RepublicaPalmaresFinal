<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaEvento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evento', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->string('nome_evento');
            $table->date('data_evento');
            $table->time('hora_inicio');
            $table->time('hora_fim');
            $table->string('capacidade_evento')->nullable();
            $table->string('local_evento');
            $table->text('descricao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('evento');
    }
}
