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
        Schema::create('terms_acceptances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained('customers')->onDelete('cascade'); // Relación con customers
            $table->string('terms_version'); // Versión de los términos aceptados
            $table->timestamp('accepted_at')->useCurrent(); // Fecha y hora del cambio (si acepta o no acepta)
            $table->boolean('is_accepted'); // Indica si el usuario acepta o no los términos
            $table->string('term_prefix'); // Prefijo del término (por ejemplo, 'TCU')
            $table->string('term_accepted'); // Descripción del término aceptado
            $table->string('accepted_from'); // Lugar desde donde se aceptó el término (ej., IP o ubicación)

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('terms_acceptances');
    }
};
