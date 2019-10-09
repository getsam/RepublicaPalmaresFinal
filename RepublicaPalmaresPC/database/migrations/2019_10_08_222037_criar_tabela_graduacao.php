<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaGraduacao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('graduacao', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->string('nome');
            $table->integer('curso_id');

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
        Schema::drop('graduacao');
    }
}
