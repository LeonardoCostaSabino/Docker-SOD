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
        Schema::create('sis.blogs', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string("tema",100);
            $table->unsignedBigInteger('sis_posts_id');
            $table->timestampsTz();

            $table->foreign("sis_posts_id")
                ->on("sis.posts")
                ->references("id")
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
        Schema::drop('sis.blogs');
    }
}
