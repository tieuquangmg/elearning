<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTheoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_theory', function (Blueprint $table){
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('theory_id');
            $table->dateTime('start_time');
            $table->integer('watch_time');
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
        Schema::drop('user_theory');
    }
}
