<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectTestDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_test_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('subject_test_id')->unsigned();
            $table->integer('subject_question_id')->unsigned();
            $table->string('answer');
            $table->string('reply');
            $table->index(['subject_test_id', 'subject_question_id']);
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
        Schema::drop('subject_test_details');
    }
}
