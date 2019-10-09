<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaCurso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curso', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->string('nome');
            $table->string('descricao');
            $table->dateTime('dt_hora_ini');
            $table->dateTime('dt_hora_fim');
            $table->integer('id_modalidade');

            $table->foreign('id_modalidade')
                ->references('id')
                ->on('modalidade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('curso');
    }
}
