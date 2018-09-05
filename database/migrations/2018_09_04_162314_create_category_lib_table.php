<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryLibTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_libs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_lang_id')->unsigned();
            $table->string('name');
            $table->text('description');
            $table->timestamps();
            $table->foreign('category_lang_id')
                ->references('id')
                ->on('category_langs')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_libs');
    }
}
