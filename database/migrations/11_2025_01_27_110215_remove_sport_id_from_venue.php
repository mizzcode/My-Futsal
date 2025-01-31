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
        Schema::table('venue', function (Blueprint $table) {
            $table->dropForeign(['sport_id']); // Hapus foreign key constraint
            $table->dropColumn('sport_id');    // Hapus kolom sport_id
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('venue', function (Blueprint $table) {
            $table->foreignId('sport_id')->nullable()->constrained('sports');
        });
    }
};
