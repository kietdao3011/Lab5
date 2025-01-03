<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sach extends Model
{
    use HasFactory;
    protected $table = 'Sach';
    protected $primaryKey = 'MaSach'; // Đặt cột khóa chính là MaSach
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'MaSach',
        'TenSach',
        'TacGia',
        'NhaXuatBan',
        'TheLoai',
        'GiaBan',
        'SoLuongTonKho',
        'NgayXuatBan',
        'MoTa'
    ];
}
?>