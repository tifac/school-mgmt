<?php

use Illuminate\Support\Facades\Schema;
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
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('profilepic');
            $table->integer('role_id')->unsigned();
            $table->rememberToken();
            $table->timestamps();

            //Foreign Keys
            $table->foreign('role_id')->references('id')->on('roles');
        });

        Schema::create('students', function(Blueprint $table) {
            $table->increments('id');
            $table->timestamp('dob');
            $table->string('address');
            $table->string('parent1_contact', 10);
            $table->string('parent2_contact', 10);
            $table->string('home_contact');
            $table->string('bloodgroup');
            $table->string('rollno', 15);
            $table->integer('uid')->unsigned();
            $table->timestamps();

            //Foreign Keys
            $table->foreign('uid')->references('id')->on('users');
        });


        Schema::create('instructors', function(Blueprint $table) {
            $table->increments('id');
            $table->timestamp('joining_date');
            $table->string('qualification');
            $table->string('address');
            $table->string('contact', 10);
            $table->integer('uid')->unsigned();
            $table->timestamps();

            //Foreign Keys
            $table->foreign('uid')->references('id')->on('users');
        });        

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('instructors');
        Schema::dropIfExists('students');
        Schema::dropIfExists('users');
    }
}
