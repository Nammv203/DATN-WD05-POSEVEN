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
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('mo_ta');
            $table->string('thoi_luong');
            $table->string('anh');
            $table->date('lich_chieu');
            $table->string('dao_dien');
            $table->string('dien_vien');
            $table->string('ngon_ngu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};
