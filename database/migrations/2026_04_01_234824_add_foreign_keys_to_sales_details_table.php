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
        Schema::table('sales_details', function (Blueprint $table) {
            $table->foreign(['product_id'], 'sales_details_product_id_fkey')->references(['id'])->on('products')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['sale_id'], 'sales_details_sale_id_fkey')->references(['id'])->on('sales')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['warehouse_id'], 'sales_details_warehouse_id_fkey')->references(['id'])->on('warehouses')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sales_details', function (Blueprint $table) {
            $table->dropForeign('sales_details_product_id_fkey');
            $table->dropForeign('sales_details_sale_id_fkey');
            $table->dropForeign('sales_details_warehouse_id_fkey');
        });
    }
};
