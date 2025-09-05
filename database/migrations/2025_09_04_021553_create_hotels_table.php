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
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('description');
            $table->foreignId('destination_id')->constrained('destinations')->onDelete('cascade');
            $table->string('address');
            $table->string('city');
            $table->string('star_rating');
            $table->string('amenities');
            $table->string('image_url');
            $table->string('base_price');
            $table->string('is_featured')->default(value: 0);
            $table->string('status')->default(value: 'active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};
