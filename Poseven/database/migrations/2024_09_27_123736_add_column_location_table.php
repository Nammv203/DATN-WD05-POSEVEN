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
        Schema::table('location', function (Blueprint $table) {
            $table->foreignId('cinema_id')->constrained(
                table: 'cinemas', indexName: 'location_cinema_id'
            );
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('location', function (Blueprint $table) {
            $table->dropForeign('location_cinema_id_foreign');
        });
    }
};
