<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEducators extends Migration
{
    public function up()
    {
        Schema::create('educators', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('image');
            $table->string('imagemedium');
            $table->string('imagethumb');
            $table->text('sliderdescription');
            $table->text('paragraph');
            $table->string('headertitle');
            $table->string('secondtitle');
            $table->text('seconddescription');
            $table->string('secondheadertitle');
            $table->string('video');
            $table->text('thirddescription');
            $table->string('sectiontitle');
            $table->string('itemimage');
            $table->string('itemtitle');
            $table->string('itemdescription');
            $table->string('item2image');
            $table->string('item2title');
            $table->string('item2description');
            $table->string('item3image');
            $table->string('item3title');
            $table->string('item3description');
            $table->string('item4image');
            $table->string('item4title');
            $table->string('item4description');
            $table->string('item5image');
            $table->string('item5title');
            $table->string('item5description');
            $table->string('item6image');
            $table->string('item6title');
            $table->string('item6description');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('workflow_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('educators');
    }
}
