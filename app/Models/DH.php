<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DH extends Model
{
    use HasFactory;

    protected $table = 'DonHang';
    protected $primaryKey = 'MaDonHang';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'MaDonHang',
        'MaKhachHang',
        'MaNhanVien',
        'NgayDatHang',
        'TongTien',
        'TrangThai',
    ];

    public function khachHang()
    {
        return $this->belongsTo(KH::class, 'MaKhachHang', 'MaKhachHang');
    }

    public function nhanVien()
    {
        return $this->belongsTo(NV::class, 'MaNhanVien', 'MaNhanVien');
    }

    public function chiTietDonHang()
    {
        return $this->hasMany(CTDH::class, 'MaDonHang', 'MaDonHang');
    }
}