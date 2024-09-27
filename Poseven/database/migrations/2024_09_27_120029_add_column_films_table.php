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
        Schema::table('films', function (Blueprint $table) {
            $table->foreignId('category_id')->constrained(
                table: 'categories', indexName: 'films_category_id'
            );
            $table->foreignId('ticket_id')->constrained(
                table: 'tickets', indexName: 'films_ticket_id'
            );
            $table->foreignId('seat_id')->constrained(
                table: 'seats', indexName: 'films_seat_id'
            );
            $table->foreignId('trailer_id')->constrained(
                table: 'trailer', indexName: 'films_trailer_id'
            );
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('films', function (Blueprint $table) {
            $table->dropForeign('films_category_id_foreign');
            $table->dropForeign('films_ticket_id_foreign');
            $table->dropForeign('films_seat_id_foreign');
            $table->dropForeign('films_trailer_id_foreign');
        });
    }
};
