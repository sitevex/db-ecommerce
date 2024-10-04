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
        Schema::create('shipments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained('orders')->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('shipment_date');
            $table->enum('shipping_method', ['store_pickup', 'home_delivery']);
            $table->text('shipping_address')->nullable();
            $table->decimal('shipping_cost', 10, 2);
            $table->string('tracking_number')->nullable();
            $table->string('carrier')->nullable();
            $table->dateTime('estimated_delivery_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipments');
    }
};
