<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaticPageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staticpage', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
            $table->string('image');
            $table->string('imagemedium');
            $table->string('imagethumb');
            $table->text('description');
            $table->text('metadescription');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('workflow_id');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::drop('staticpage');
    }
}
