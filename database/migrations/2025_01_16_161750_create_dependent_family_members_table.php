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
        Schema::create('dependent_family_members', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained('employees')->onUpdate('cascade')->onDelete('cascade');
            $table->string('name');
            $table->string('lastname')->nullable();
            $table->enum('type', ['father', 'mother', 'son', 'daughter', 'spouse']);
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->date('birthdate')->nullable();
            $table->date('deathdate')->nullable();
            $table->unsignedTinyInteger('age')->nullable();
            $table->boolean('has_catastrophic_illness')->default(false);
            $table->boolean('has_disability')->default(false);
            $table->unsignedDecimal('disability_percentage', 5, 2)->nullable();
            $table->string('custom_catastrophic_disease_name')->nullable();
            $table->string('custom_catastrophic_disease_description')->nullable();
            $table->string('custom_disability_name')->nullable();
            $table->string('custom_disability_description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dependent_family_members');
    }
};
