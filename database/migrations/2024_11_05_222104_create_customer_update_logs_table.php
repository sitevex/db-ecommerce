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
        Schema::create('customer_update_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained('customers')->onDelete('cascade'); // Relación con customers
            $table->unsignedBigInteger('updated_by'); // ID del usuario o sistema que realizó la actualización
            $table->json('changed_fields'); // Campos modificados en formato JSON para mayor flexibilidad

            // Agregar relación con la tabla de usuarios si 'updated_by' se refiere a usuarios
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_update_logs');
    }
};
