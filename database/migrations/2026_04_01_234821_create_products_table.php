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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->text('status');
            $table->text('sku')->unique();
            $table->text('name');
            $table->text('description')->nullable();
            $table->decimal('price', 10, 2);
            $table->bigInteger('upc');
            $table->bigInteger('provider_id')->nullable();
            $table->text('image_url')->nullable();
            $table->bigInteger('category_id')->nullable();
            $table->bigInteger('brand_id')->nullable();
            $table->bigInteger('unit_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
