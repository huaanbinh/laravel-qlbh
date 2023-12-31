<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    use HasFactory;
    protected $table='sanpham';
    public function loaisanpham(){
        return $this->belongsTo(LoaiSanPham::class);
    }
    public function hinhanh(){
        return $this->belongsTo(HinhAnh::class);
    }
}
