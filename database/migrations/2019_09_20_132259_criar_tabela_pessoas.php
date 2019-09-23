<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaPessoas extends Migration
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
           $table->unsignedBigInteger('nucleo_id')->index();
//           $table->timestampTz('created_at');
//           $table->timestampTz('updated_at');

           $table->foreign('endereco_id')
                 ->references('id')
                 ->on('enderecos')
                 ->onDelete('cascade')
                 ->onUpdate('cascade');

            $table->foreign('telefone_id')
                ->references('id')
                ->on('telefones')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('endereco_id')
                ->references('id')
                ->on('endereco')
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
        Schema::drop('pessoas');
    }
}
