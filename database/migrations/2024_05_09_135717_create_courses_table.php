<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->foreignId('user_id');
            $table->string('title');
            $table->string('slug');
            $table->text('excerpt');    
            $table->text('body');
            $table->text('course_list');
            $table->unsignedInteger('instructor_id'); // ID dari instruktur kursus
            $table->enum('level', ['Beginner', 'Intermediate', 'Advanced']); // Level kursus
            $table->text('image'); // Kolom untuk menyimpan URL gambar
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
