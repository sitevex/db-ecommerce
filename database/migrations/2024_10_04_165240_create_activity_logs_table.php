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
        Schema::create('activity_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('email_attempt')->nullable();
            $table->string('password_length')->nullable();
            // Detalles de la actividad
            $table->text('activity');  // Descripción de la actividad realizada
            $table->string('ip_address', 45);  // Dirección IP (para soportar IPv4 e IPv6)
            $table->text('user_agent');  // Información del user agent (navegador/dispositivo)
            $table->string('location', 255)->nullable();  // Geolocalización (ciudad, país), opcional
            $table->string('browser', 100);  // Navegador utilizado
            $table->string('os', 100);  // Sistema operativo utilizado
            $table->text('request_url');  // URL en la que se realizó la actividad

            // Método HTTP utilizado
            $table->enum('method', ['GET', 'POST', 'PUT', 'DELETE', 'PATCH'])->default('GET'); 

            // Código de estado HTTP
            $table->smallInteger('status_code');  // Código de estado HTTP (e.g., 200, 404, 500)

            // Índices adicionales para optimizar las búsquedas
            $table->index(['user_id', 'ip_address'], 'user_ip_index');  // Índice compuesto para mejorar búsquedas por usuario e IP
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activity_logs');
    }
};
