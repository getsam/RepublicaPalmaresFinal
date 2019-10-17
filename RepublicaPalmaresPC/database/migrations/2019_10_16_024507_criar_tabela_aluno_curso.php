<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaAlunoCurso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aluno_curso', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->integer('aluno_id')->unsigned();
            $table->integer('curso_id')->unsigned();

            $table->foreign('aluno_id')
                ->references('id')
                ->on('aluno');
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
        Schema::drop('aluno_curso');
    }
}
