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
        Schema::create('promotions', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('name');
            $table->string('description');
            $table->string('discount_type');
            $table->string('discount_value');
            $table->string('min_order_amount');
            $table->string('max_discount');
            $table->string('usage_limit');
            $table->string('used_count');
            $table->string('valid_from');
            $table->string('valid_to');
            $table->string('applicable_to');
            $table->string('is_active');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promotions');
    }
};
