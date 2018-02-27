<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('article', function(Blueprint $table) {
            $table->increments('id');
            $table->integer(    'category_id')->unsigned();
            $table->string('title', 250);
            $table->string('description', 250)->nullable();
            $table->text('contenu')->nullable();
            $table->string('slug', 100)->nullable();
            $table->tinyInteger('active')->nullable();
            $table->string('img', 100)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
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
