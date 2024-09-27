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
        Schema::table('member_card', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained(
                table: 'users', indexName: 'member_card_user_id'
            );
            $table->foreignId('point_id')->constrained(
                table: 'member_points', indexName: 'member_card_point_id'
            );
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('member_card', function (Blueprint $table) {
            $table->dropForeign('member_card_user_id_foreign');
            $table->dropForeign('member_card_point_id_foreign');
        });
    }
};
