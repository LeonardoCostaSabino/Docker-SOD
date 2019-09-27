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
        Schema::create('sis.funcionarios', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->integer('ctps');
            $table->integer('matricula');
            $table->integer('numero_oab');
            $table->date('dtadmissao');
            $table->unsignedBigInteger('sis_fisicas_id');
            $table->unsignedBigInteger('sis_usuarios_id');
            $table->timestampsTz();

            $table->foreign('sis_fisicas_id')
                ->references('id')
                ->on('sis.fisicas')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('sis_usuarios_id')
                ->references('id')
                ->on('sis.usuarios')
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
        Schema::drop('sis.funcionarios');
    }
}



