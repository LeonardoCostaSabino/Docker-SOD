<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaJurFinanceiro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jur.financeiro', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string("obsavisoprevio");
            $table->date('rescisao');
            $table->float('verbasrecisitorias', 8, 2);
            $table->float("salario", 8, 2);
            $table->float("comissao", 8, 2);
            $table->enum('formapagamento',['mensal','quinzenal','semanal']);
            $table->boolean('horasextras');
            $table->boolean('adicional');
            $table->boolean('gratificacao');
            $table->boolean('fgts');
            $table->boolean('extrato');
            $table->boolean('convencaocol');
            $table->timestampsTz();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('jur.financeiro');
    }
}
