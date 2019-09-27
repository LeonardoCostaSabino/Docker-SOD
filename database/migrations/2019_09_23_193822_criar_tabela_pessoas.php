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
        Schema::create('sis.pessoas', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('nome', 100);
            $table->string('email',"60")->unique();
            $table->unsignedBigInteger('sis_enderecos_id');
            $table->unsignedBigInteger('sis_telefones_id');
            $table->unsignedBigInteger('sis_nucleos_id');
            $table->timestampsTz();

            $table->foreign('sis_enderecos_id')
                ->references('id')
                ->on('sis.enderecos')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('sis_telefones_id')
                ->references('id')
                ->on('sis.telefones')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('sis_nucleos_id')
                ->references('id')
                ->on('sis.nucleos')
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
        Schema::drop('sis.pessoas');
    }
}
