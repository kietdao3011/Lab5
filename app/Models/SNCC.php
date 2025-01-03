<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SNCC extends Model
{
    use HasFactory;

    protected $table = 'SachNhaCungCap';
    protected $primaryKey = 'MaSachNhaCungCap';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'MaSachNhaCungCap',
        'MaNhaCungCap',
        'MaSach',
        'GiaCungCap',
    ];

    public function nhaCungCap()
    {
        return $this->belongsTo(NCC::class, 'MaNhaCungCap', 'MaNhaCungCap');
    }

    public function sach()
    {
        return $this->belongsTo(Sach::class, 'MaSach', 'MaSach');
    }
}