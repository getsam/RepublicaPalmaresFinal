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
            $table->integer('modalidade');
            $table->integer('curso');
            $table->integer('aluno');
            $table->integer('colaborador');
            $table->integer('status');
            $table->dateTime('dt_presenca');
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
