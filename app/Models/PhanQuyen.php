<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhanQuyen extends Model
{
    use HasFactory;
    protected $table='phanquyen';
    public function khachhang(){
        return $this->belongsTo(KhachHang::class);
    }
    public function admin(){
        return $this->belongsTo(Admin::class);
    }
}
