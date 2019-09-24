<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaEnderecos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enderecos', function (Blueprint $table) {
            $table->bigIncrements('id')->primary();
            $table->integer("cep");
            $table->string("complemento",30);
            $table->string("bairro",70);
            $table->string("estado",70);
            $table->string("cidade",70);
            $table->string("logradouro",100);
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
        Schema::drop('enderecos');
    }
}
