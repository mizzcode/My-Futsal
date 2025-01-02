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
        Schema::create('venue', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->unsignedBigInteger('sport_id');
            $table->timestamps();

            $table->foreign('sport_id')->references('id')->on('sports');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('venue');
    }
};
