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
        Schema::create('colors', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 255);
            $table->string('slug')->unique();
            $table->string('hex_code', 7)->nullable(); // Ej: #FF5733
            $table->string('rgb_code', 13)->nullable(); // Ej: rgb(255, 87, 51)
            $table->string('alias', 255)->nullable(); // Ej: Carmesí
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('colors');
    }
};
