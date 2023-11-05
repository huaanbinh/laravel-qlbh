<?php

namespace App\Http\Controllers;
use App\Models\LoaiSanPham;
use App\Models\SanPham;
use Illuminate\Http\Request;

class LoaiSanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function danhsach()
    {
        $dsLoaiSanPham = LoaiSanPham::all();
        return view('loaisanpham/danh_sach',compact('dsLoaiSanPham'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('loaisanpham/them_moi');
    }
    public function xulithemmoi(Request $request)
    {
        $loaisanpham=new LoaiSanPham();
        $loaisanpham->ten = $request->ten;
        $loaisanpham->save();
        return redirect()->route('loai-san-pham.danh-sach');
        //return "them moi thanh cong";
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
        $loaisanpham = LoaiSanPham::find($id);
        if (empty( $loaisanpham)) {
            return "Loai san pham khong ton tai";
        }
        return view('loaisanpham/cap_nhat', compact('loaisanpham'));
    }

    public function xulicapnhat(Request $request,$id)
    {
        $loaisanpham = LoaiSanPham::find($id);
        if (empty( $loaisanpham)) {
            return "Loai san pham khong ton tai";
        }      
        $loaisanpham->ten = $request->ten;
        $loaisanpham->save();
        return redirect()->route('loai-san-pham.danh-sach');
    }
   
    public function delete($id)
    {
        $loaisanpham = LoaiSanPham::find($id);
        if (empty( $loaisanpham)) {
            return "Loai san pham khong ton tai";
        }      
        $loaisanpham->delete();
        return redirect()->route('loai-san-pham.danh-sach')->with('thong-bao','Xóa thành công');
    }
    public function destroy(string $id)
    {
        //
    }
}
