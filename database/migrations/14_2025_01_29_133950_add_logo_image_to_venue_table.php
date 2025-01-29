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
            $table->string('logo_image')->nullable()->after('large_image');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('venue', function (Blueprint $table) {
            $table->dropColumn('logo_image');
        });
    }
};
