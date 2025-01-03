<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class KH extends Model
{
    use HasFactory;
    protected $table = 'KhachHang';
    protected $primaryKey = 'MaKhachHang'; // Đặt cột khóa chính là MaSach
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'MaKhachHang',
        'HoTen',
        'NgaySinh',
        'GioiTinh',
        'DiaChi',
        'SDT',
        'Email'
       
    ];
}
