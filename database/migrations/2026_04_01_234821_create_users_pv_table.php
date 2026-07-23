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
        Schema::create('users_pv', function (Blueprint $table) {
            $table->id();
            $table->text('username')->unique('users_pv_username_key');
            $table->text('password_hash');
            $table->text('email')->nullable()->unique('users_pv_email_key');
            $table->text('image_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_pv');
    }
};
