<?php

namespace App\Http\Controllers;
use App\Models\PhieuXuat;
use App\Models\KhachHang;
use App\Models\SanPham;
use Illuminate\Http\Request;

class PhieuXuatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function danhsach()
    {
        $dsPhieuXuat=PhieuXuat::all();
        return view('phieuxuat/danh_sach',compact('dsPhieuXuat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $khachhang=KhachHang::all();
        $sanpham=SanPham::all();
        return view('phieuxuat/them_moi',compact('khachhang','sanpham'));
    }

    public function xulythemmoi(Request $request)
    {
        $khachhang=KhachHang::all();
        $sanpham=SanPham::all();
        $phieuxuat=new PhieuXuat();
        if(empty($phieuxuat))
        {
            return redirect()->route('phieu-xuat.them-moi')->with('message', 'Vui lòng nhập đầy đủ thông tin');
        }
        else{
        $phieuxuat->ma_don_hang= $request->ma;
        $phieuxuat->nguoi_tao= $request->nguoitao;
        $phieuxuat->khachhang_id = $request->khachhang_id;
        $phieuxuat->sanpham_id = $request->sanpham_id;
        $phieuxuat->don_gia = $request->dongia;
        $phieuxuat->so_luong = $request->soluong;
        $phieuxuat->tong_tien = $request->tongtien;
        $phieuxuat->trang_thai = $request->trangthai;
        $phieuxuat->save();
        }
        return redirect()->route('phieu-xuat.danh-sach');
    }

    public function delete($id)
    {
        $phieuxuat=PhieuXuat::find($id);
        if(empty($phieuxuat))
        {
            return "Phiếu không tồn tại";
        }
        $phieuxuat->delete();
        return redirect()->route('phieu-xuat.danh-sach')->with('thong-bao','Xóa thành công');
    }
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        $sanpham=SanPham::all();
        $phieuxuat= PhieuXuat::find($id);
        if (empty( $phieuxuat)) {
            return "Phiếu không tồn tại";
        }
        return view('phieuxuat/cap_nhat', compact('phieuxuat','sanpham'));
    }

    public function xulicapnhat(Request $request,$id)
    {
        $phieuxuat= PhieuXuat::find($id);
        if (empty( $phieuxuat)) {
            return "Phiếu không tồn tại";
        }      
        $phieuxuat->sanpham_id=$request->sanpham_id;
        $phieuxuat->don_gia = $request->dongia;
        $phieuxuat->don_gia=$request->dongia;
        $phieuxuat->so_luong=$request->soluong;
        $phieuxuat->tong_tien=($phieuxuat->dongia)*($phieuxuat->soluong);
        $phieuxuat->trang_thai=$request->trangthai;
        $phieuxuat->save();
        return redirect()->route('phieu-xuat.danh-sach');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
