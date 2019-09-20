<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pessoas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table){
           $table->bigIncrements('id')->primary();
           $table->string('nome');
           $table->string('email')->unique();
           $table->unsignedBigInteger('endereco_id')->index();
           $table->unsignedBigInteger('telefone_id')->index();
           $table->unsignedBigInteger('profissao_id')->index();
           $table->unsignedBigInteger('nucleo_id')->index();

           $table->foreign('endereco_id')
                 ->references('id')
                 ->on('enderecos')
                 ->onDelete('cascade');

            $table->foreign('telefone_id')
                ->references('id')
                ->on('telefones')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('profissao_id')
                ->references('id')
                ->on('profissoes')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('endereco_id')
                ->references('id')
                ->on('endereco')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
