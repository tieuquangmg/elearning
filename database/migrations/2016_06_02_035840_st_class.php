<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StClass extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('code', 20)->unique();
            $table->integer('subject_id');
            $table->integer('user_id');//teacher
            $table->integer('create_by');
            $table->integer('year');
            $table->date('start_date');
            $table->date('end_date');
            $table->tinyInteger('semester');
            $table->tinyInteger('limit')->default(20);
            $table->tinyInteger('active');
            $table->index(['subject_id', 'user_id', 'create_by']);
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
