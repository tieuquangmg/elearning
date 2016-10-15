<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AnsMultiChoiceText extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('multi_choice_text', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('question_id');
            $table->string('reply');
            $table->tinyInteger('no');
            $table->boolean('answer')->default(0);
            $table->index('question_id');
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
