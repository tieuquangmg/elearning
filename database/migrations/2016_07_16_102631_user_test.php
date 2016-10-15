<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserTest extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_test', function (Blueprint $table){
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('test_id');
            $table->index(['user_id', 'test_id']);
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->integer('work_time');
            $table->tinyInteger('score');
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
