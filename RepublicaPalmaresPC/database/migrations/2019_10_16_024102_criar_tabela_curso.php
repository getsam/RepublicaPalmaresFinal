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
            $table->string('qnt_pessoas')->nullable();
            $table->integer('modalidade_id')->unsigned();
        });

        Schema::table('curso', function (Blueprint $table) {
            $table->foreign('modalidade_id')
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
