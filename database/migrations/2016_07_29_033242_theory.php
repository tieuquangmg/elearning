<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Theory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('theories', function (Blueprint $table){
            $table->increments('id');
            $table->integer('unit_id')->unsigned();
            $table->string('name');
            $table->text('intro');
            $table->string('image');
            $table->longText('content');
            $table->integer('create_by')->unsigned();
            $table->boolean('notify');
            $table->boolean('active');
            $table->integer('time');
            $table->index(['unit_id', 'create_by']);
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
