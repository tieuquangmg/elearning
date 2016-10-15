<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
//'unit_id', 'user_id', 'start_time', 'work_time', 'score'
class CreateSectionTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section_tests', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('section_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->dateTime('start_time');
            $table->integer('work_time');
            $table->tinyInteger('score');
            $table->tinyInteger('status')->default(1);
            $table->index(['user_id', 'section_id']);
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
        Schema::drop('section_tests');
    }
}
