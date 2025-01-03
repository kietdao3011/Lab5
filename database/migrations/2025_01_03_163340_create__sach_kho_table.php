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
        Schema::create('SachKho', function (Blueprint $table) {
            $table->string('MaSachKho', 10)->primary();
            $table->string('MaKho', 10);
            $table->string('MaSach');
            $table->integer('SoLuongTonSachKho');
            $table->timestamps();

            // Foreign keys
            $table->foreign('MaKho')->references('MaKho')->on('Kho')->onDelete('cascade');
            $table->foreign('MaSach')->references('MaSach')->on('Sach')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('SachKho');
    }
};