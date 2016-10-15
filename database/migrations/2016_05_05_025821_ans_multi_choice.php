<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AnsMultiChoice extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('multi_choice', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('question_id');
            $table->string('reply');
            $table->string('picture')->nullable();
            $table->string('video')->nullable();
            $table->string('audio')->nullable();
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
