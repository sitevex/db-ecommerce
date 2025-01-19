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
        Schema::create('employee_education', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained('employees')->onUpdate('cascade')->onDelete('cascade');
            $table->string('academic_title'); // Título académico o carrera
            // $table->foreignId('country_id')->constrained('countries')->onUpdate('cascade')->onDelete('cascade'); // País donde realizó los estudios
            $table->string('country')->nullable();
            $table->enum('type_study', [
                'curso', 'secundario', 'terciario', 'universitario', 
                'posgrado', 'master', 'doctorado', 'otro'
            ]); // Tipo de estudios
            $table->string('study_area')->nullable(); // Área de estudio
            $table->string('institution'); // Institución
            $table->enum('status', ['en_curso', 'graduado', 'abandonado']); // Estado
            $table->date('start_date'); // Fecha de inicio
            $table->date('end_date')->nullable(); // Fecha de finalización
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_education');
    }
};
