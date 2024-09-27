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
        Schema::table('cinemas', function (Blueprint $table) {
            $table->foreignId('film_id')->constrained(
                table: 'films', indexName: 'cinemas_film_id'
            );
            $table->foreignId('room_id')->constrained(
                table: 'rooms', indexName: 'cinemas_room_id'
            );
            $table->foreignId('showtime_id')->constrained(
                table: 'showtime', indexName: 'cinemas_showtime_id'
            );
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cinemas', function (Blueprint $table) {
            $table->dropForeign('cinemas_film_id_foreign');
            $table->dropForeign('cinemas_room_id_foreign');
            $table->dropForeign('cinemas_showtime_id_foreign');
        });
    }
};
