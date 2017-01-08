<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    public function up()
    {
        Schema::create('book', function (Blueprint $table) {
            $table->increments('id', true);
            $table->string('title');
            $table->string('image');
            $table->string('imagemedium');
            $table->string('imagethumb');
            $table->string('slug');
            $table->string('video');
            $table->integer('age');
            $table->string('author');
            $table->text('description');
            $table->integer('categories_id')->unsigned();
            $table->integer('level_id')->unsigned();
            $table->foreign('level_id')->references('id')->on('levels');
            $table->integer('country_id')->unsigned();
            $table->integer('partner_id')->unsigned();
            $table->foreign('partner_id')->references('id')->on('partners');
            $table->integer('bundle_id')->unsigned();
            $table->foreign('bundle_id')->references('id')->on('bundle');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('workflow_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('book');
    }
}
