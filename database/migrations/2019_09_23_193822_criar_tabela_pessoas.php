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
            $table->bigIncrements('id');
            $table->string('nome', "100");
            $table->string('email',"60")->unique();
            $table->unsignedBigInteger('endereco_id');
            $table->unsignedBigInteger('telefone_id');
            $table->unsignedBigInteger('nucleo_id');
            $table->timestampsTz();

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

            $table->foreign('nucleo_id')
                ->references('id')
                ->on('nucleos')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        Schema::enableForeignKeyConstraints();
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
