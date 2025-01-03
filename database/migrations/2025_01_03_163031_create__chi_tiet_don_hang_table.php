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
        Schema::create('ChiTietDonHang', function (Blueprint $table) {
            $table->string('MaChiTiet', 10)->primary();
            $table->string('MaDonHang', 10);
            $table->string('MaSach');
            $table->integer('SoLuongSach');
            $table->integer('GiaBan');
            $table->timestamps();

            // Foreign keys
            $table->foreign('MaDonHang')->references('MaDonHang')->on('DonHang')->onDelete('cascade');
            $table->foreign('MaSach')->references('MaSach')->on('Sach')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ChiTietDonHang');
    }
};