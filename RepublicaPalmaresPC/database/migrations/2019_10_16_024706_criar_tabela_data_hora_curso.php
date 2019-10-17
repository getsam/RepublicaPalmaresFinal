<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaDataHoraCurso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_hora_curso', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->timestamps();
            $table->string('dias_aula');
            $table->time('hora_inicio');
            $table->time('hora_fim');
            $table->integer('curso_id')->unsigned();

            $table->foreign('curso_id')
                ->references('id')
                ->on('curso');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('data_hora_curso');
    }
}
