<?php

namespace App\Http\Controllers;
use App\Models\NhaCungCap;
use Illuminate\Http\Request;

class NhaCungCapController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function danhsach()
    {
        $dsNhaCungCap=NhaCungCap::all();
        return view('nhacungcap/danh_sach', compact('dsNhaCungCap'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('nhacungcap/them_moi');
    }

    public function xulythemmoi(Request $request)
    {
        $nhacungcap=new NhaCungCap();
        $nhacungcap->ten = $request->ten;
        $nhacungcap->dia_chi = $request->diachi;
        $nhacungcap->so_dien_thoai = $request->sodienthoai;
        $nhacungcap->save();
        //return redirect()->route('loai-san-pham.danh-sach');
        return redirect()->route('nha-cung-cap.danh-sach');
    }
    
    public function delete($id)
    {
        $nhacungcap=NhaCungCap::find($id);
        if(empty($nhacungcap))
        {
            return "nhà cung cấp không tồn tại";
        }
        $nhacungcap->delete();
        return redirect()->route('nha-cung-cap.danh-sach');
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
        $nhacungcap = NhaCungCap::find($id);
        if (empty( $nhacungcap)) {
            return "Nha cung cap khong ton tai";
        }
        return view('nhacungcap/cap_nhat', compact('nhacungcap'));
    }
    public function xulicapnhat(Request $request, string $id)
    {
       $nhacungcap=NhaCungCap::find($id);
       if(empty($nhacungcap))
       {
        return "Nhà cung cấp không tồn tại";
       }
       $nhacungcap->ten=$request->ten;
       $nhacungcap->dia_chi=$request->diachi;
       $nhacungcap->so_dien_thoai=$request->sodienthoai;
       $nhacungcap->save();
       return redirect()->route('nha-cung-cap.danh-sach');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
