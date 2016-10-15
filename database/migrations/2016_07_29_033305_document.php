<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Document extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('path');
            $table->integer('unit_id')->unsigned();
            $table->integer('create_by')->unsigned();
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
