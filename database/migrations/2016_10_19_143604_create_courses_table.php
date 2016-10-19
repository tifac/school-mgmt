<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('course_name');
            $table->string('course_code');
            $table->integer('credits')->unsigned(); 
            $table->timestamps();
        });


        Schema::create('classes', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('year')->unsigned();
            $table->string('class_code', 6);

            $table->integer('course_id')->unsigned();
            $table->integer('instructor_id')->unsigned();

            $table->timestamps();

            //Foreign Keys
            $table->foreign('course_id')->references('id')->on('courses');
            $table->foreign('instructor_id')->references('id')->on('instructors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classes');
        Schema::dropIfExists('courses');
    }
}
