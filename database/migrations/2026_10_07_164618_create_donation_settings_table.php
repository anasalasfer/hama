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
        Schema::create('donation_settings', function (Blueprint $table) {
            $table->id();
            $table->string('account_name')->default('شام كاش');
            $table->string('account_number')->default('');
            $table->unsignedBigInteger('target_amount')->default(0);
            $table->unsignedBigInteger('collected_amount')->default(0);
            $table->string('currency', 20)->default('ل.س');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donation_settings');
    }
};
