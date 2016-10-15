<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Exam extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams', function (Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('intro');
            $table->integer('subject_id')->unsigned();
            $table->integer('create_by')->unsigned();
            $table->index(['subject_id', 'create_by']);
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
