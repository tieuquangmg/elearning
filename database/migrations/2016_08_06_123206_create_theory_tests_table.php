<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTheoryTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('theory_tests', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('theory_test_id')->unsigned();
            $table->integer('theory_question_id')->unsigned();
            $table->string('answer');
            $table->tinyInteger('status')->default(1);
            $table->index(['theory_test_id', 'theory_question_id']);
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
        Schema::drop('theory_tests');
    }
}
