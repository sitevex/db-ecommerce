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
        Schema::create('personal_contacts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('entity_id'); // ID del cliente o empleado
            $table->string('name');
            $table->string('lastname')->nullable();
            $table->string('phone_one');
            $table->string('phone_two')->nullable();
            $table->string('email')->nullable();
            $table->string('position')->nullable();
            $table->foreignId('relationship_id')->nullable()->constrained('relationships')->onUpdate('cascade')->onDelete('set null');
            $table->enum('entity_type', ['employee', 'customer']); // Tipo de entidad (cliente o empleado)
            // $table->string('entity_type'); // Tipo de la entidad (modelo asociado: 'Customer' o 'Employee')
            // $table->foreignId('position_id')->nullable()->constrained('positions')->onUpdate('cascade')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_contacts');
    }
};
