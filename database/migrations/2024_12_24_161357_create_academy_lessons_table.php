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
        Schema::create('academy_lessons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained('academy_courses')->onUpdate('cascade')->onDelete('cascade'); // Relación con courses
            $table->string('title')->unique();
            $table->string('slug')->unique();
            $table->text('content')->nullable(); // Contenido (texto, enlaces, etc.)
            $table->string('video_url')->nullable(); // URL del video (si aplica)
            $table->integer('order')->default(0); // Orden de la lección
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('academy_lessons');
    }
};
