<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Kho extends Model
{
    use HasFactory;
    protected $table = 'Kho';
    protected $primaryKey = 'MaKho'; // Đặt cột khóa chính là MaSach
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'MaKho',
        'ViTriKho',
        'SoLuongTong'
        
    ];
}
