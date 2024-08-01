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
        Schema::create('provincial_tax_rates', function (Blueprint $table) {
            $table->id();
            $table->string('province_code', 2)->nullable(false)->unique();
            $table->string('province_name', 50)->nullable(false);
            $table->decimal('gst_rate', 5, 3)->nullable(false);
            $table->decimal('pst_rate', 5, 3)->nullable(false);
            $table->decimal('hst_rate', 5, 3)->nullable(false);
            $table->decimal('vat_rate', 5, 3)->nullable(false)->default(0);
            $table->decimal('total_tax_rate', 5, 3)->nullable(false);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });

        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable(false);
            $table->unsignedBigInteger('provincial_tax_rate_id')->nullable(false);
            $table->timestamp('order_date')->useCurrent();
            $table->string('email')->nullable(false);
            $table->decimal('pst', 10, 2)->nullable(false);
            $table->decimal('gst', 10, 2)->nullable(false);
            $table->decimal('hst', 10, 2)->nullable(false);
            $table->decimal('sub_amount', 10, 2)->nullable(false);
            $table->decimal('total_amount', 10, 2)->nullable(false);
            $table->text('shipping_address')->nullable(false);
            $table->text('billing_address')->nullable(false);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict');
            $table->foreign('provincial_tax_rate_id')->references('id')->on('provincial_tax_rates')->onDelete('restrict');
        });

        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id')->nullable(false);
            $table->unsignedBigInteger('product_id')->nullable(false);
            $table->unsignedBigInteger('quantity')->nullable(false);
            $table->decimal('unit_price', 10, 2)->nullable(false);
            $table->decimal('line_price', 10, 2)->nullable(false);
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('restrict');
        });

        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id')->nullable(false);
            $table->string('transaction_id', 255);
            $table->string('transaction_status', 255)->nullable(false);
            $table->text('response');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
            $table->softDeletes();
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
        Schema::dropIfExists('orders');
        Schema::dropIfExists('transactions');
    }
};
