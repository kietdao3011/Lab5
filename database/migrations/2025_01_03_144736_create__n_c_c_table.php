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
        Schema::create('NhanCungCap', function (Blueprint $table) {
            $table->string('MaNhaCungCap', 10)->primary();
            $table->string('TenNhaCungCap', 30);
            $table->bigint('SDT');
            $table->string('Email', 50);
            $table->string('DiaChi', 1000);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('NhanCungCap');
    }
};
