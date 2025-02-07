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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->nullable()->unique();
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nui')->unique();
            $table->foreignId('id_type')->nullable()->constrained('identification_types')->onUpdate('cascade')->onDelete('cascade');
            $table->string('name');
            $table->string('lastname')->nullable();
            $table->string('image')->nullable();
            $table->string('image_url')->nullable();
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->string('business_name')->nullable();
            $table->string('address')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('phone_one');
            $table->string('phone_two')->nullable();
            $table->string('email');
            $table->string('commercial_email');
            $table->string('billing_email')->nullable();
            $table->string('business_address');
            $table->string('shipping_address')->nullable();
            // $table->string('contact_name')->nullable();
            // $table->string('contact_lastname')->nullable();
            // $table->string('contact_position')->nullable();
            // $table->string('contact_phone_one')->nullable();
            // $table->string('contact_phone_two')->nullable();
            // $table->string('contact_email')->nullable();
            $table->enum('status', ['active', 'inactive']);
            $table->timestamp('last_updated_at')->nullable();
            $table->timestamp('last_reminder_at')->nullable();
            $table->timestamp('terms_accepted_at')->nullable();
            $table->foreignId('customer_category_id')->constrained('customer_categories')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('marital_status_id')->nullable()->constrained('marital_statuses')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('customers');
    }
};
