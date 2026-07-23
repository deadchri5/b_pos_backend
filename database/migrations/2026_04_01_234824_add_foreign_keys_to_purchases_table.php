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
        Schema::table('purchases', function (Blueprint $table) {
            $table->foreign(['provider_id'], 'purchases_provider_id_fkey')->references(['id'])->on('providers')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['registered_by'], 'purchases_registered_by_fkey')->references(['id'])->on('users_pv')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('purchases', function (Blueprint $table) {
            $table->dropForeign('purchases_provider_id_fkey');
            $table->dropForeign('purchases_registered_by_fkey');
        });
    }
};
