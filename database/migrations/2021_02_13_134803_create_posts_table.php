<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{

    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('category_id')->unsigned();
            $table->string('title');
            $table->text('description');
            $table->text('text');
            $table->string('slug')->unique();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
