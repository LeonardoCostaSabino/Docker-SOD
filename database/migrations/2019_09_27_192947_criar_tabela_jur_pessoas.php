<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaJurPessoas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jur.pessoas', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string("nomereu",70);
            $table->longText("historicoreu",50);
            $table->integer("cpfreu");
            $table->integer("cnpjreu");
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
        Schema::drop('jur.pessoas');
    }
}
