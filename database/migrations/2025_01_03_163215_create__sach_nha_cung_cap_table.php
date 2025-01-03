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
        Schema::create('SachNhaCungCap', function (Blueprint $table) {
            $table->string('MaSachNhaCungCap', 10)->primary();
            $table->string('MaNhaCungCap', 10);
            $table->string('MaSach');
            $table->integer('GiaCungCap');
            $table->timestamps();

            // Foreign keys
            $table->foreign('MaNhaCungCap')->references('MaNhaCungCap')->on('NhaCungCap')->onDelete('cascade');
            $table->foreign('MaSach')->references('MaSach')->on('Sach')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('SachNhaCungCap');
    }
};