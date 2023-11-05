<?php

namespace App\Http\Controllers;
use App\Models\NhanVien;
use Illuminate\Http\Request;

class NhanVienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function danhsach()
    {
        $dsNhanVien=NhanVien::all();
        return view('nhanvien/danh_sach',compact('dsNhanVien'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('nhanvien/them_moi');
    }

    public function xulithemmoi(Request $request)
    {
        $nhanvien=new NhanVien();
        $nhanvien->ten = $request->ten;
        $nhanvien->account = $request->account;
        $nhanvien->pass = $request->pass;
        $nhanvien->dia_chi = $request->dia_chi;
        $nhanvien->so_dien_thoai = $request->so_dien_thoai;
        $nhanvien->email = $request->email;
        $nhanvien->save();
        //return "redirect()->route('san-pham.xl-them-moi');"
        return redirect()->route('nhan-vien.danh-sach');
    }

    public function delete($id)
    {
        $nhanvien=NhanVien::find($id);
        if(empty($nhanvien))
        {
            return "Nhân viên không tồn tại";
        }
        $nhanvien->delete();
        return redirect()->route('nhan-vien.danh-sach');
    }
    /**
     * Store a newly created resource in storage.
     */
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
        $nhanvien=NhanVien::find($id);
        if(empty($nhanvien))
        {
            return "Nhân viên không tồn tại";
        }
        return view('nhanvien/cap_nhat',compact('nhanvien'));
    }

    public function xulicapnhat(Request $request,$id)
    {
        $nhanvien=NhanVien::find($id);
        if(empty($nhanvien))
        {
            return "Nhân viên không tồn tại";
        }
        $nhanvien->ten = $request->ten;
        $nhanvien->account = $request->account;
        $nhanvien->pass = $request->pass;
        $nhanvien->dia_chi = $request->dia_chi;
        $nhanvien->so_dien_thoai = $request->so_dien_thoai;
        $nhanvien->email = $request->email;
        $nhanvien->save();
        return redirect()->route('nhan-vien.danh-sach');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
