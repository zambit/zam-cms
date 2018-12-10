<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('header')->comment('Наименование');
            $table->string('title')->comment('Заголовок');
            $table->string('description')->comment('Описание');
            $table->string('keywords')->comment('Ключевые слова');
            $table->string('image')->comment('Главная картинка');
            $table->unsignedInteger('category_id')->comment('Категория');
            $table->text('content')->comment('Контент');
            $table->unsignedInteger('author_id')->comment('Автор');
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('blog_categories');
            $table->foreign('author_id')->references('id')->on('users');
        });

        Schema::create('blog_post_tag', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('post_id')->comment('Пост');
            $table->unsignedInteger('tag_id')->comment('Тег');
            $table->timestamps();

            $table->foreign('post_id')->references('id')->on('blog_posts');
            $table->foreign('tag_id')->references('id')->on('blog_tags');

            $table->unique(['post_id', 'tag_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_post_tag');
        Schema::dropIfExists('blog_posts');
    }
}