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
        Schema::table('orders', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained(
                table: 'users', indexName: 'orders_user_id'
            );
            $table->foreignId('film_id')->constrained(
                table: 'films', indexName: 'orders_film_id'
            );
            $table->foreignId('product_id')->constrained(
                table: 'sub_products', indexName: 'orders_product_id'
            );
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropForeign('orders_user_id_foreign');
            $table->dropForeign('orders_film_id_foreign');
            $table->dropForeign('orders_product_id_foreign');
        });
    }
};
