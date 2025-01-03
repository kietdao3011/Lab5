<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SK extends Model
{
    use HasFactory;

    protected $table = 'SachKho';
    protected $primaryKey = 'MaSachKho';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'MaSachKho',
        'MaKho',
        'MaSach',
        'SoLuongTonSachKho',
    ];

    public function kho()
    {
        return $this->belongsTo(Kho::class, 'MaKho', 'MaKho');
    }

    public function sach()
    {
        return $this->belongsTo(Sach::class, 'MaSach', 'MaSach');
    }
}