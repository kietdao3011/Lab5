<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sach extends Model
{
    protected $table = 'Sach';
    protected $primaryKey = 'MaSach';
    public $timestamps = false;

    protected $fillable = [
        'TenSach',
        'TacGia',
        'Nhaxuatban',
        'TheLoai',
        'GiaBan',
        'SoLuongTonKho',
        'NgayXuatBan',
        'MoTa',
    ];
}
?>