<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaFisicas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fisicas', function (Blueprint $table){
            $table->unsignedBigInteger('id')->index();
            $table->integer('cpf');
            $table->enum('sexo', ['masculino', 'feminino']);
            $table->string('genero');
            $table->date('datanascimento');
            $table->string('nacionalidade');
            $table->string('naturalidade');
            $table->string('estadocivil');
            $table->unsignedBigInteger('escolaridade.id')->index();
            $table->unsignedBigInteger("profissoes.id")->index();
            $table->timestampTz();

            $table->foreign("id")
                  ->references("id")
                  ->on("pessoas")
                  ->onDelete("cascade")
                  ->onUpdate("cascade");

            $table->foreign("escolaridade.id")
                ->references("id")
                ->on("escolaridades")
                ->onDelete("cascade")
                ->onUpdate("cascade");

            $table->foreign("profissoes.id")
                ->references("id")
                ->on("profissoes")
                ->onDelete("cascade")
                ->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('fisicas');
    }
}
