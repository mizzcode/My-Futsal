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
        Schema::create('schedule', function (Blueprint $table) {
            $table->id();
            $table->dateTime('date');
            $table->string('status');
            $table->integer('price');
            $table->unsignedBigInteger('field_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('field_id')->references('id')->on('field');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedule');
    }
};
