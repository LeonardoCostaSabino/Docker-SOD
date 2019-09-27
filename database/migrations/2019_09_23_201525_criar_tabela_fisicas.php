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
        Schema::create('sis.fisicas', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->integer('cpf');
            $table->enum('sexo', ['masculino', 'feminino']);
            $table->string('genero',30);
            $table->date('datanascimento');
            $table->string('nacionalidade',50);
            $table->string('naturalidade',50);
            $table->string('estadocivil',50);
            $table->string('nomeconjugue',50);
            $table->unsignedBigInteger('sis_escolaridades_id');
            $table->unsignedBigInteger("sis_profissoes_id");
            $table->unsignedBigInteger('sis_pessoas_id');
            $table->timestampsTz();

            $table->foreign("sis_pessoas_id")
                ->references("id")
                ->on("sis.pessoas")
                ->onDelete("cascade")
                ->onUpdate("cascade");

            $table->foreign("sis_escolaridades_id")
                ->references("id")
                ->on("sis.escolaridades")
                ->onDelete("cascade")
                ->onUpdate("cascade");

            $table->foreign("sis_profissoes_id")
                ->references("id")
                ->on("sis.profissoes")
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
        Schema::drop('sis.fisicas');
    }
}
