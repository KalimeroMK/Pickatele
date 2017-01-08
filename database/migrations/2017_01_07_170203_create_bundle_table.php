<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBundleTable extends Migration
{
    public function up()
    {
        Schema::create('bundle', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('image');
            $table->string('imagemedium');
            $table->string('imagethumb');
            $table->string('link');
            $table->text('description');
            $table->integer('price');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('workflow_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('bundle');
    }
}
