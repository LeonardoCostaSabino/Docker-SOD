<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaJurDadosTrabalhistas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jur.dadostrabalhistas', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->date('dtadmissao');
            $table->date('dtctps');
            $table->date('dtdemissao');
            $table->date('dtbaixa');
            $table->string("funcinicial",100);
            $table->string("funcatual",100);
            $table->boolean('contratosuperior10');
            $table->time('horainicio');
            $table->time('horafim');
            $table->boolean('escala');
            $table->time('horariointervalo');
            $table->enum('regponto',['cartao','folha','livro','nao']);
            $table->boolean('assempregado');
            $table->string('ferias',50);
            $table->unsignedBigInteger('jur_pessoas_id');
            $table->unsignedBigInteger('jur_financeiro_id');
            $table->timestampsTz();


            $table->foreign('jur_pessoas_id')
                ->references('id')
                ->on('jur.pessoas')
                ->onDelete('cascade')
                ->onUpdate('cascade');

                $table->foreign('jur_financeiro_id')
                ->references('id')
                ->on('jur.financeiro')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('jur.dadostrabalhistas');
    }
}
