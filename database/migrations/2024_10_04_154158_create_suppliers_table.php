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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('tax_id')->unique();
            $table->string('provider_type')->nullable();
            $table->string('address')->nullable();
            $table->string('phone_one')->nullable();
            $table->string('phone_two');
            $table->string('email')->unique();
            $table->string('website')->nullable();
            $table->string('contact_name')->nullable();
            $table->string('contact_position')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('payment_terms')->nullable();
            $table->string('currency')->nullable();
            $table->text('shipping_terms')->nullable();
            $table->text('return_policy')->nullable();
            $table->enum('status', ['active', 'inactive', 'pending', 'suspended', 'retired'])->default('active');
            $table->foreignId('city_id')->constrained('cities')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('state_id')->constrained('states')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('country_id')->constrained('countries')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};
