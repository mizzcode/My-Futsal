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
        Schema::table('users', function (Blueprint $table) {
            $table->string('email')->nullable();
            $table->string('username')->nullable()->change();
            $table->string('password')->nullable()->change();
            $table->string('role')->nullable()->change();
            $table->string('full_name')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('username')->nullable(false)->change();
            $table->string('password')->nullable(false)->change();
            $table->string('role')->nullable(false)->change();
            $table->dropColumn('full_name');
        });
    }
};