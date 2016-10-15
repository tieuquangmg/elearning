<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ReplyTest extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reply_test', function (Blueprint $table){
            $table->increments('id');
            $table->integer('user_test_id');
            $table->integer('question_id');
            $table->index(['user_test_id', 'question_id']);
            $table->dateTime('answer');
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
