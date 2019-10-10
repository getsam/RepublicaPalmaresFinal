<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaColaborador extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colaborador', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->integer('pessoa_id');

            $table->foreign('pessoa_id')
                ->references('id')
                ->on('pessoa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('colaborador');
    }
}
