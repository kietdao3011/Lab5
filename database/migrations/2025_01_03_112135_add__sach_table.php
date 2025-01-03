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
        Schema::create('Sach', function (Blueprint $table) {
            $table->string('MaSach');
            $table->string('TenSach');
            $table->string('TacGia');
            $table->string('NhaXuatBan');
            $table->string('TheLoai');
            $table->decimal('GiaBan', 8, 2);
            $table->integer('SoLuongTonKho');
            $table->date('NgayXuatBan');
            $table->text('MoTa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
