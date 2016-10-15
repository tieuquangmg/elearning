<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassMeetingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_meeting', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('class_id');
            $table->integer('meeting_id');
            $table->string('attendee_pw');
            $table->string('moderator_pw');
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
        Schema::drop('class_meeting');
    }
}
