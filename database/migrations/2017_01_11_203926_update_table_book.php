<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTableBook extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('book', function (Blueprint $table) {
            $table->string('country_code');
            $table->string('url_commun_file');
            $table->string('url_language_file');
            $table->string('book_language');
            $table->text('description_short');
            $table->string('backend_version');
            $table->float('atos');
            $table->string('lexile');
            $table->boolean('isFree');
            $table->boolean('isPreview');
            $table->boolean('coverCorrect');
            $table->boolean('isChoose');
            $table->integer('priority');
            $table->tinyInteger('freebook');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('country_code');
            $table->dropColumn('url_commun_file');
            $table->dropColumn('url_language_file');
            $table->dropColumn('book_language');
            $table->dropColumn('description_short');
            $table->dropColumn('backend_version');
            $table->dropColumn('atos');
            $table->dropColumn('lexile');
            $table->dropColumn('isFree');
            $table->dropColumn('isPreview');
            $table->dropColumn('coverCorrect');
            $table->dropColumn('isChoose');
            $table->dropColumn('priority');
            $table->dropColumn('freebook');
        });
    }
}