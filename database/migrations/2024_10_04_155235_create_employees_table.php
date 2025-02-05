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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->nullable()->unique();
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('department_id')->nullable()->constrained('departments')->onUpdate('cascade')->onDelete('cascade');   // Actual
            $table->foreignId('position_id')->nullable()->constrained('positions')->onUpdate('cascade')->onDelete('set null');      // Actual
            $table->foreignId('branch_id')->nullable()->constrained('branches')->onUpdate('cascade')->onDelete('set null');         // Actual
            $table->foreignId('contract_id')->nullable()->constrained('contract_types')->onUpdate('cascade')->onDelete('set null'); // Actual
            $table->foreignId('labor_action_id')->nullable()->constrained('labor_actions')->onUpdate('cascade')->onDelete('set null');  // Actual
            $table->string('nui')->unique();
            $table->foreignId('id_type')->nullable()->constrained('identification_types')->onUpdate('cascade')->onDelete('cascade');
            $table->string('name');
            $table->string('lastname')->nullable();
            $table->string('image')->nullable();
            $table->string('image_url')->nullable();
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->date('birthdate');
            $table->unsignedTinyInteger('age');
            $table->date('hire_date');  // Fecha de contratacion o inicio
            $table->string('address');
            $table->string('phone_one');
            $table->string('phone_two')->nullable();
            $table->string('telephone_extension', length: 10)->nullable();
            $table->string('personal_email')->nullable();  // Correo personal
            $table->string('work_email')->nullable();   // Correo del trabajo
            $table->enum('status', ['active', 'inactive'])->default('inactive');
            $table->foreignId('marital_status_id')->constrained('marital_statuses')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('city_id')->constrained('cities')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('state_id')->constrained('states')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('country_id')->constrained('countries')->onUpdate('cascade')->onDelete('cascade');
            $table->text('current_description ')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
