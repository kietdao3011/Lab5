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
        Schema::create('DonHang', function (Blueprint $table) {
            $table->string('MaDonHang', 10)->primary();
            $table->string('MaKhachHang', 10);
            $table->string('MaNhanVien', 10);
            $table->date('NgayDatHang');
            $table->integer('TongTien');
            $table->string('TrangThai', 30);
            $table->timestamps();

            // Foreign keys
            $table->foreign('MaKhachHang')->references('MaKhachHang')->on('KhachHang')->onDelete('cascade');
            $table->foreign('MaNhanVien')->references('MaNhanVien')->on('NhanVien')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('DonHang');
    }
};