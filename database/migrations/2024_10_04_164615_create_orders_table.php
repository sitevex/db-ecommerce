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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained('customers')->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('order_date');
            $table->decimal('total_amount', 10, 2);
            $table->enum('status', ['pending', 'processing', 'shipped', 'completed', 'cancelled']);
            $table->enum('shipping_type', ['store_pickup', 'home_delivery']);
            $table->text('shipping_address')->nullable();
            $table->decimal('shipping_cost', 10, 2);
            $table->foreignId('warehouse_pickup_id')->nullable()->constrained('warehouses')->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('estimated_delivery_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
