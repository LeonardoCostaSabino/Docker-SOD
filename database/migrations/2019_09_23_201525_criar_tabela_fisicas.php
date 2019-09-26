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
            $table->bigIncrements('id');
            $table->integer('cpf');
            $table->enum('sexo', ['masculino', 'feminino']);
            $table->string('genero',30);
            $table->date('datanascimento');
            $table->string('nacionalidade',50);
            $table->string('naturalidade',50);
            $table->string('estadocivil',50);
            $table->string('nomeconjugue',50);
            $table->unsignedBigInteger('escolaridades_id');
            $table->unsignedBigInteger("profissoes_id");
            $table->unsignedBigInteger('pessoas_id');
            $table->timestampsTz();

            $table->foreign("pessoas_id")
                ->references("id")
                ->on("pessoas")
                ->onDelete("cascade")
                ->onUpdate("cascade");

            $table->foreign("escolaridades_id")
                ->references("id")
                ->on("escolaridades")
                ->onDelete("cascade")
                ->onUpdate("cascade");

            $table->foreign("profissoes_id")
                ->references("id")
                ->on("profissoes")
                ->onDelete("cascade")
                ->onUpdate("cascade");

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
        Schema::drop('fisicas');
    }
}
