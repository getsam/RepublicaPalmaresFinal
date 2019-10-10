<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaPresenca extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presenca', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->integer('modalidade_id');
            $table->integer('curso_id');
            $table->integer('aluno_id');
            $table->integer('colaborador_id');
            $table->integer('status');
            $table->dateTime('dt_presenca');

            $table->foreign('modalidade_id')
                ->references('id')
                ->on('modalidade');
            $table->foreign('curso_id')
                ->references('id')
                ->on('curso');
            $table->foreign('aluno_id')
                ->references('id')
                ->on('aluno');
            $table->foreign('colaborador_id')
                ->references('id')
                ->on('colaborador');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('presenca');
    }
}
