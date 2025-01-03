<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class NCC extends Model
{
    use HasFactory;
    protected $table = 'Nhacungcap';
    protected $primaryKey = 'MaNhaCungCap'; // Đặt cột khóa chính là MaSach
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'MaNhacungcap',
        'TenNhacungcap',
        'SDT',
        'DiaChi',
        'Email'
    ];
}
