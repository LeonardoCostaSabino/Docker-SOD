<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaFuncionarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->integer('ctps');
            $table->integer('matricula');
            $table->integer('numero_oab');
            $table->date('dtadmissao');
            $table->unsignedBigInteger('fisicas_id');
            $table->unsignedBigInteger('usuarios_id');
            $table->timestampsTz();

            $table->foreign('fisicas_id')
                ->references('id')
                ->on('fisicas')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('usuarios_id')
                ->references('id')
                ->on('usuarios')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            Schema::enableForeignKeyConstraints();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('funcionarios');
    }
}



