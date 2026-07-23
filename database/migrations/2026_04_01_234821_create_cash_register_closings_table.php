<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cash_register_closings', function (Blueprint $table) {
            $table->id();
            $table->timestampTz('closing_date')->nullable()->default(DB::raw("now()"));
            $table->decimal('total_cash', 10);
            $table->decimal('discrepancy', 10)->nullable();
            $table->text('notes')->nullable();
            $table->decimal('cash_total', 10)->default(0);
            $table->decimal('credit_card_total', 10)->default(0);
            $table->decimal('payments_to_providers', 10)->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cash_register_closings');
    }
};
