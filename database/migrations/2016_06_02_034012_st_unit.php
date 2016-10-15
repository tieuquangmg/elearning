<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StUnit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('units', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code', 16);
            $table->integer('subject_id')->unsigned();
            $table->integer('position');
            $table->string('name', 128);
            $table->string('image')->nullable();
            $table->text('description');
            $table->tinyInteger('active')->default(1);
            $table->index('subject_id');
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
