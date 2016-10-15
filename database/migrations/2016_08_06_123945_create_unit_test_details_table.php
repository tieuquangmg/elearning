<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnitTestDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unit_test_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('unit_test_id')->unsigned();
            $table->integer('question_bank_id')->unsigned();
            $table->string('answer');
            $table->string('reply');
            $table->index(['unit_test_id', 'question_bank_id']);
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
        Schema::drop('unit_test_details');
    }
}
