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
        Schema::create('labor_actions', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique(); // Nombre del tipo de contrato (Ej. Indefinido, Emergente, Temporal)
            $table->string('slug')->unique();
            $table->text('description')->nullable(); // Descripción opcional para mayor detalle
            $table->enum('status', ['active', 'inactive'])->default('active'); // Indica si el tipo de contrato está disponible
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('labor_actions');
    }
};
