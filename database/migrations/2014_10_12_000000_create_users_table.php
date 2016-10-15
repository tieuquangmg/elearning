<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('code', 20)->unique();
            $table->string('email', 50)->unique();
            $table->string('phone_number', 15)->unique();
            $table->boolean('sex')->default(1);
            $table->string('password');
            $table->dateTime('birthday');
            $table->text('address');
            $table->text('image');
            $table->rememberToken();
            $table->tinyInteger('active')->default(1);
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
//        Schema::drop('users');
//        Schema::table('users', function (Blueprint $table){
//            $table->string('first_name');
//        });
    }
}
