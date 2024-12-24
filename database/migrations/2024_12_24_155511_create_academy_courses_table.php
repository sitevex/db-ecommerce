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
        Schema::create('academy_courses', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->string('image_url')->nullable();
            $table->enum('level', ['beginner', 'intermediate', 'advanced'])->default('beginner');
            $table->enum('lenguage', ['es', 'en', 'otro'])->default('es');
            $table->decimal('price', 10, 2);
            $table->decimal('discount', 10, 2);
            $table->enum('modality', ['online', 'presential'])->default('online'); // Modalidad del curso
            $table->string('location')->nullable(); // Ubicación (si es presencial)
            $table->dateTime('start_date')->nullable(); // Fecha de inicio
            $table->dateTime('end_date')->nullable(); // Fecha de fin
            $table->string('duration')->nullable(); // en horas o minutos
            $table->enum('publication_status', ['draft', 'published', 'archived'])->default('published');
            $table->foreignId('category_id')->constrained('academy_categories')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('instructor_id')->constrained('academy_instructors')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('brand_id')->nullable()->constrained('brands')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('academy_courses');
    }
};
