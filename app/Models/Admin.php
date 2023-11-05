<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $table='admin';
    public function phanquyen(){
        return $this->belongsTo(PhanQuyen::class);
    }
    public function khachhang(){
        return $this->belongsTo(KhachHang::class);
    }
}
