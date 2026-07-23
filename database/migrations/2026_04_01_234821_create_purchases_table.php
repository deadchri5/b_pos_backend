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
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('provider_id')->nullable();
            $table->timestampTz('date')->nullable()->default(DB::raw("now()"));
            $table->decimal('total_amount', 10);
            $table->text('invoice_reference')->nullable();
            $table->text('invoice_image_url')->nullable();
            $table->bigInteger('registered_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchases');
    }
};
