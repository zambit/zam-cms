<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('languages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->comment('Полное название языка');
            $table->string('slug', 2)->unique()->comment('Двухбуквенный код ISO 639-1 (1998)');
            $table->string('flag')->comment('Картинка обозначения языка (флаг)');
            $table->timestamps();
        });

        Schema::create('language_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('language_id')->unsigned();
            $table->string('locale')->index();

            $table->unique(['language_id', 'locale']);
            $table->foreign('language_id')->references('id')->on('languages')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('language_translations');
        Schema::dropIfExists('languages');
    }
}
