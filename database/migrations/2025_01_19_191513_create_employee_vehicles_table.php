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
        Schema::create('employee_vehicles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained('employees')->onUpdate('cascade')->onDelete('cascade'); // Relación con empleados
            $table->string('brand'); // Marca del vehículo
            $table->string('model'); // Modelo del vehículo
            $table->string('license_plate')->nullable()->unique(); // Matrícula del vehículo
            $table->string('color')->nullable(); // Color del vehículo
            $table->enum('type', ['carro', 'motocicleta', 'camión', 'suv', 'otro']); // Tipo de vehículo
            $table->string('engine_number')->nullable(); // Número de motor
            $table->string('chassis_number')->nullable(); // Número de chasis
            $table->string('plate_number')->nullable();     // Número de la placa de vehiculo
            $table->year('year'); // Año del vehículo
            $table->boolean('is_active')->default(true); // Indica si el vehículo está activo
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_vehicles');
    }
};
