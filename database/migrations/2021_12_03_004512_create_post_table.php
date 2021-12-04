<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
           //creacion de columnas
           $table->string('publication')->nullable()->default('text');
           $table->enum('state',['published','unpublished','in_review','received'])->nullable()->default('received');
           $table->text('publication_content')->nullable();
           $table->bigInteger('category_id')->nullable()->unsigned();
           $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post');
    }
}
