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
        Schema::create('NhanVien', function (Blueprint $table) {
            $table->string('MaNhanVien', 10)->primary();
            $table->string('HoTen', 50);
            $table->date('NgaySinh');
            $table->string('GioiTinh', 10);
            $table->string('ChucVu', 30);
            $table->integer('SDT');
            $table->string('Email', 50);
            $table->string('LichLamViec', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('NhanVien');
    }
};
