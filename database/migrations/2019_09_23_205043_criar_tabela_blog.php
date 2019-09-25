<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriartabelaBlog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string("tema",100);
            $table->unsignedBigInteger('post_id');
            $table->timestampsTz();

            $table->foreign("post_id")
                ->on("posts")
                ->references("id")
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
        Schema::drop('blogs');
    }
}
