<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaJuridicas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sis.juridicas', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->integer('cnpj');
            $table->string('razao')->unique();
            $table->string('servico');
            $table->string('objetivo');
            $table->string('inscricaoestadual');
            $table->string('inscricaomunicipal');
            $table->boolean('microempresa');
            $table->string('tipo');
            $table->unsignedBigInteger('sis_pessoas_id');
            $table->timestampsTz();

        $table->foreign("sis_pessoas_id")
            ->references("id")
            ->on('sis.pessoas')
            ->onUpdate("cascade")
            ->onDelete("cascade");

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
        Schema::drop('sis.juridicas');
    }
}
