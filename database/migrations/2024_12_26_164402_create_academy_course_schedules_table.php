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
        Schema::create('academy_course_schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained('academy_courses')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('city_id')->constrained('cities')->onUpdate('cascade')->onDelete('cascade');
            $table->date('start_date'); // Fecha de inicio
            $table->date('end_date')->nullable(); // Fecha de finalización
            $table->time('start_time'); // Hora de inicio
            $table->time('end_time')->nullable(); // Hora de finalización
            $table->string('location')->nullable(); // Dirección o lugar específico en la ciudad
            $table->integer('max_students')->nullable(); // Capacidad para ese horario
            $table->enum('status', ['active', 'canceled'])->default('active'); // Estado del horario (activo, cancelado, etc.)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('academy_course_schedules');
    }
};
