<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('Blog', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Title');
            $table->string('NoTiltle');
            $table->text('Excerpts');
            $table->longText('Content');
            $table->string('Image');
            $table->integer('Highlights')->default(0);
            $table->integer('View')->default(0);
            $table->integer('idCategoryBlog')->unsigned();
            $table->foreign('idCategoryBlog')->references('id')->on('CategoryBlog');
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
        Schema::drop('Blog');
    }
}
