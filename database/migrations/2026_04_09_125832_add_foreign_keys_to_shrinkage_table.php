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
        Schema::table('inventory_shrinkage', function (Blueprint $table) {
            // add foreign key to reason_id
            $table->foreign('reason_id')->references('id')->on('shrinkage_reason')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('inventory_shrinkage', function (Blueprint $table) {
            $table->dropForeign(['reason_id']);
        });
    }
};
