<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseUserScoresTable extends Migration
{
    public function up()
    {
        Schema::create('course_user_scores', function (Blueprint $table) {
            $table->id(); // primary key
            $table->unsignedBigInteger('course_id'); // foreign key to courses table
            $table->unsignedBigInteger('user_id'); // foreign key to users table
            $table->integer('score'); // score of the user for the course
            $table->timestamps();

            // Assuming 'courses' and 'users' tables exist
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('course_user_scores');
    }
}

