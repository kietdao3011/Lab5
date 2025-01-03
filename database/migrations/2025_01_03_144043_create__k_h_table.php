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
        Schema::create('KhachHang', function (Blueprint $table) {
            $table->string('MaKhachHang', 10)->primary();
            $table->string('HoTen', 50);
            $table->date('NgaySinh');
            $table->string('GioiTinh', 10);
            $table->bigint('SDT');
            $table->string('DiaChi', 50);
            $table->string('Email', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('KhachHang');
    }
};
