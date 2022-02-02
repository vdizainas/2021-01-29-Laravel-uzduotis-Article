<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->text('excerpt');
            $table->longtext('description');
            $table->text('author');

            $table->unsignedBigInteger('category_id')->default('1');
            $table->foreign('category_id')->references('id')->on('article_categories');

            $table->unsignedBigInteger('image_id')->default('1');
            $table->foreign('image_id')->references('id')->on('article_images');

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
        Schema::dropIfExists('articles');
    }
}