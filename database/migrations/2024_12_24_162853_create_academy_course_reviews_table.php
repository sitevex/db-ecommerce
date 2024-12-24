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
        Schema::create('academy_course_reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained('academy_students')->onUpdate('cascade')->onDelete('cascade'); // Relación con students
            $table->foreignId('course_id')->constrained('academy_courses')->onUpdate('cascade')->onDelete('cascade'); // Relación con courses
            $table->integer('rating')->default(0); // Calificación del curso (1-5 estrellas)
            $table->text('review')->nullable(); // Comentario
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('academy_course_reviews');
    }
};
