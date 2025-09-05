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
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('description');
            $table->foreignId('destination_id')->constrained('destinations')->onDelete('cascade');
            $table->string('duration_days');
            $table->string('duration_nights');
            $table->string('tour_type');
            $table->string('difficulty_level');
            $table->string('max_participants');
            $table->string('min_participants');
            $table->string('base_price');
            $table->string('includes');
            $table->string('excludes');
            $table->string('itinerary');
            $table->string('image_url');
            $table->string('status')->default(value: 'active');
            $table->string('is_featured')->default(value: 0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tours');
    }
};
