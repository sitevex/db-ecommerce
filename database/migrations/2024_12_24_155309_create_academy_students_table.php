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
        Schema::create('academy_students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade'); // Relación con users
            $table->string('first_name');
            $table->string('last_name');
            $table->string('profile_picture')->nullable();
            $table->string('profile_picture_url')->nullable();
            $table->date('birth_date')->nullable(); // Fecha de nacimiento
            $table->string('phone')->nullable(); // Teléfono de contacto
            $table->text('address')->nullable(); // Dirección
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('academy_students');
    }
};
