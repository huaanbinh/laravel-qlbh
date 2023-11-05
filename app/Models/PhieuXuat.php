<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhieuXuat extends Model
{
    protected $table='phieuxuat';
    use HasFactory;
    public function khachhang(){
        return $this->belongsTo(KhachHang::class);
    }
    public function sanpham(){
        return $this->belongsTo(SanPham::class);
    }
}
