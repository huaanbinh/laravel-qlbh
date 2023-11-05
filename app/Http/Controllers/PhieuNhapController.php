<?php

namespace App\Http\Controllers;
use App\Models\PhieuNhap;
use App\Models\SanPham;
use App\Models\NhaCungCap;
use Illuminate\Http\Request;

class PhieuNhapController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function danhsach()
    {
        $dsphieunhap=PhieuNhap::all();
        return view('phieunhap/danh_sach', compact('dsphieunhap'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dsNhaCungCap=NhaCungCap::all();
        $dsSanPham=SanPham::all();
        return view('phieunhap/them_moi', compact('dsSanPham','dsNhaCungCap'));
    }

    public function xulythemmoi(Request $request)
    {
        $dsNhaCungCap=NhaCungCap::all();
        $dsSanPham=SanPham::all();
        $phieunhap=new PhieuNhap();
        if(empty($phieunhap))
        {
            return redirect()->route('phieu-nhap.them-moi')->with('message', 'Vui lòng nhập đầy đủ thông tin');
        }
        else{
        $phieunhap->nhacungcap_id= $request->nhacungcap_id;
        $phieunhap->sanpham_id= $request->sanpham_id;
        $phieunhap->so_luong= $request->soluong;
        $phieunhap->gia_nhap= $request->gianhap;
        $phieunhap->gia_ban= $request->giaban;
        $phieunhap->save();
        return redirect()->route('phieu-nhap.danh-sach');
        }
    }
    
    public function delete($id)
    {
        $phieunhap=PhieuNhap::find($id);
        if(empty($phieunhap))
        {
            return "Phiếu không tồn tại";
        }
        $phieunhap->delete();
        return redirect()->route('phieu-nhap.danh-sach')->with('thong-bao','Xóa thành công');
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
        $dsSanPham=SanPham::all();
        $dsNhaCungCap=NhaCungCap::all();
        $phieunhap=PhieuNhap::find($id);
        if(empty($phieunhap))
        {
            return "Phiếu không tồn tại";
        }
        return view('phieunhap/cap_nhat', compact('dsSanPham','dsNhaCungCap','phieunhap'));
    }
    public function xulicapnhat(Request $request,$id)
    {
        $dsSanPham=SanPham::all();
        $dsNhaCungCap=SanPham::all();
        $phieunhap=PhieuNhap::find($id);
        if(empty($phieunhap))
        {
            return "Phiếu không tồn tại";
        }
        $phieunhap->nhacungcap_id= $request->nhacungcap_id;
        $phieunhap->sanpham_id= $request->sanpham_id;
        $phieunhap->so_luong= $request->soluong;
        $phieunhap->gia_nhap= $request->gianhap;
        $phieunhap->gia_ban= $request->giaban;
        $phieunhap->save();
        return redirect()->route('phieu-nhap.danh-sach');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
