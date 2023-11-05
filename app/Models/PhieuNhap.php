<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhieuNhap extends Model
{
    protected $table='phieunhap';
    use HasFactory;
    public function nhacungcap(){
        return $this->belongsTo(NhaCungCap::class);
    }
    public function sanpham(){
        return $this->belongsTo(SanPham::class);
    }
}
