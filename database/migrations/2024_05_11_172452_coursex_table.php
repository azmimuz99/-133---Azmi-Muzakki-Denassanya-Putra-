<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coursesx', function (Blueprint $table) {
            $table->id(); // Auto-incremental primary key
            $table->foreignId('course_id');
            $table->string('title');
            $table->text('desc');
            $table->timestamps(); // Tambahkan kolom created_at dan updated_at
        });
  
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coursesx');
    }
};