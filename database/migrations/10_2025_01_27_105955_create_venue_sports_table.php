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
        Schema::create('venue_sports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('venue_id')->constrained('venue')->onDelete('cascade');
            $table->foreignId('sport_id')->constrained('sports')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('venue_sports');
    }
};
