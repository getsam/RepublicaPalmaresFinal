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
            $table->integer('modalidade_id');
            $table->integer('curso_id');
            $table->integer('pessoa_id');

            $table->foreign('modalidade_id')
                ->references('id')
                ->on('modalidade');
            $table->foreign('curso_id')
                ->references('id')
                ->on('curso');
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
        Schema::drop('evento');
    }
}
