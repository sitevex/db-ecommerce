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
        Schema::create('inventory_movements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('inventory_id')->constrained('inventories')->onUpdate('cascade')->onDelete('cascade');
            $table->enum('movement_type', ['entry', 'exit', 'adjustment']);
            $table->integer('quantity');
            $table->string('reason')->nullable(); // Ejemplo: "compra", "devolución", "daño"
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade'); // Usuario responsable
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventory_movements');
    }
};
