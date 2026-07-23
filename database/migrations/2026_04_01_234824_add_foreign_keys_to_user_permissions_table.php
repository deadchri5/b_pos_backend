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
        Schema::table('user_permissions', function (Blueprint $table) {
            $table->foreign(['permission_id'], 'user_permissions_permission_id_fkey')->references(['id'])->on('permissions')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['user_id'], 'user_permissions_user_id_fkey')->references(['id'])->on('users_pv')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user_permissions', function (Blueprint $table) {
            $table->dropForeign('user_permissions_permission_id_fkey');
            $table->dropForeign('user_permissions_user_id_fkey');
        });
    }
};
