<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImgpostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imgpost', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('posts_id')->length(10)->unsigned();
            $table->foreign('posts_id')->references('id')->on('posts')->onDelete('cascade');
            $table->string('link_img',50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imgpost');
    }
}
