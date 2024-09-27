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
        Schema::table('comments', function (Blueprint $table) {
            $table->foreignId('film_id')->constrained(
                table: 'films', indexName: 'comments_film_id'
            );
            $table->foreignId('user_id')->constrained(
                table: 'users', indexName: 'comments_user_id'
            );
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('comments', function (Blueprint $table) {
            $table->dropForeign('comments_film_id_foreign');
            $table->dropForeign('comments_user_id_foreign');
        });
    }
};
