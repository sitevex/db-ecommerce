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
        Schema::create('work_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained('employees')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('position_id')->nullable()->constrained('positions')->onUpdate('cascade')->onDelete('set null');
            $table->foreignId('department_id')->nullable()->constrained('departments')->onUpdate('cascade')->onDelete('set null');
            $table->foreignId('branch_id')->nullable()->constrained('branches')->onUpdate('cascade')->onDelete('set null');
            $table->foreignId('labor_action_id')->nullable()->constrained('labor_actions')->onUpdate('cascade')->onDelete('set null');  // Tipo de acción
            // $table->foreignId('office_id')->nullable()->constrained('offices')->onUpdate('cascade')->onDelete('set null');
            /* $table->enum('action_type', [
                'hiring', 'onboarding', 'promotion', 'transfer', 'termination', 'rehire', 'training', 
                'contract_change', 'suspension', 'leave_of_absence', 
                'salary_change', 'recognition', 'performance_review',
                'retirement', 'role_change', 'shift_change', 'temporary_role'
            ])->nullable(); */ // Tipo de acción
            $table->string('work_email')->nullable(); // Correo laboral asignado durante ese periodo
            $table->foreignId('contract_type_id')->nullable()->constrained('contract_types')->onUpdate('cascade')->onDelete('set null'); // Si el tipo de contrato es eliminado, se establece como null
            $table->date('start_date'); // Fecha de inicio
            $table->date('end_date')->nullable(); // Fecha de finalización
            $table->text('description')->nullable(); // Descripción adicional
            $table->timestamps();
        });

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('work_histories');
    }
};
