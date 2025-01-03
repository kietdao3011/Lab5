<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NV extends Model
{
    use HasFactory;
    protected $table = 'NhanVien';
    protected $primaryKey = 'MaNhanVien'; // Đặt cột khóa chính là MaSach
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'MaNhanVien',
        'HoTen',
        'NgaySinh',
        'GioiTinh',
        'ChucVu',
        'SDT',
        'Email',
        'LichLamViec',
        
    ];
}
