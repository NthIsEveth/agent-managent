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
        Schema::create('supplier_users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 64)->default('');
            $table->string('password', 64)->default('');
            $table->string('phone', 11)->default('');
            $table->string('agentId', 64)->default('');
            $table->string('businessLicense', 64)->default('');
            $table->string('legalPersionName',64)->default('');
            $table->string('status',16)->default('');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supplier_users');
    }
};
