<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PsNews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('news_category_id');
            $table->integer('user_id');
            $table->string('title');
            $table->text('intro');
            $table->mediumText('content');
            $table->integer('view')->default(0);
            $table->string('source');
            $table->dateTime('last_view');
            $table->boolean('active')->default(0);
            $table->tinyInteger('type')->default(0);
            $table->index('user_id');
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
        //
    }
}
