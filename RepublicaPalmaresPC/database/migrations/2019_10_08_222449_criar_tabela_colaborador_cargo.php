<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaColaboradorCargo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colaborador_cargo', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->integer('colaborador_id');
            $table->integer('cargo_id');

            $table->foreign('colaborador_id')
                ->references('id')
                ->on('colaborador');
            $table->foreign('cargo_id')
                ->references('id')
                ->on('cargo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('colaborador_cargo');
    }
}
