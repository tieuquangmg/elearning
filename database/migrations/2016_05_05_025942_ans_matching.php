<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AnsMatching extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matching', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('question_id');
            $table->string('premise');
            $table->string('response');
            $table->string('pr_img')->nullable();
            $table->string('re_img')->nullable();
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
