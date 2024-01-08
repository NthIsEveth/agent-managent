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
        Schema::create('system_users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 64)->default('');
            $table->string('password', 64)->default('');
            $table->string('phone', 11)->unique()->default('');
            $table->string('status')->default('');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('system_users');
    }
};
