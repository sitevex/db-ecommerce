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
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('department_id')->nullable()->constrained('departments')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('position_id')->nullable()->constrained('positions')->onUpdate('cascade')->onDelete('set null');
            $table->string('nui')->unique();
            $table->foreignId('id_type')->nullable()->constrained('identification_types')->onUpdate('cascade')->onDelete('cascade');
            $table->string('name');
            $table->string('lastname')->nullable();
            $table->string('image')->nullable();
            $table->string('image_url')->nullable();
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->date('birthdate');
            $table->unsignedTinyInteger('age');
            // $table->string('position');
            $table->date('hire_date');
            $table->string('address');
            $table->string('phone_one');
            $table->string('phone_two')->nullable();
            $table->string('staff_email')->nullable();
            $table->string('work_email')->nullable();
            // $table->string('contact_name')->nullable();
            // $table->string('contact_relationship')->nullable();
            // $table->string('contact_phone_one')->nullable();
            // $table->string('contact_phone_two')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('inactive');
            $table->foreignId('marital_status_id')->constrained('marital_statuses')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('city_id')->constrained('cities')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('state_id')->constrained('states')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('country_id')->constrained('countries')->onUpdate('cascade')->onDelete('cascade');
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
