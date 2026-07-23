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
        Schema::table('purchase_details', function (Blueprint $table) {
            $table->foreign(['product_id'], 'purchase_details_product_id_fkey')->references(['id'])->on('products')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['purchase_id'], 'purchase_details_purchase_id_fkey')->references(['id'])->on('purchases')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('purchase_details', function (Blueprint $table) {
            $table->dropForeign('purchase_details_product_id_fkey');
            $table->dropForeign('purchase_details_purchase_id_fkey');
        });
    }
};
