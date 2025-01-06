<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CTDH extends Model
{
    use HasFactory;

    protected $table = 'ChiTietDonHang';
    protected $primaryKey = 'MaChiTiet';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'MaChiTiet',
        'MaDonHang',
        'MaSach',
        'SoLuongSach',
        'GiaBan',
        'TongGia'
    ];

    public function donHang()
    {
        return $this->belongsTo(DH::class, 'MaDonHang', 'MaDonHang');
    }

    public function sach()
    {
        return $this->belongsTo(Sach::class, 'MaSach', 'MaSach');
    }
}