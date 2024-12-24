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
        Schema::create('academy_enrollments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained('academy_students')->onUpdate('cascade')->onDelete('cascade'); // Relación con students
            $table->foreignId('course_id')->constrained('academy_courses')->onUpdate('cascade')->onDelete('cascade'); // Relación con courses
            $table->enum('status', ['active', 'completed', 'cancelled'])->default('active'); // Estado de la inscripción
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('academy_enrollments');
    }
};
