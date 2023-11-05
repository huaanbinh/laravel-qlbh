<?php

namespace App\Http\Controllers;
use App\Models\PhanQuyen;
use App\Models\KhachHang;
use Illuminate\Http\Request;

class KhachHangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function danhsach()
    {
        $dsKhachHang = KhachHang::all();
        return view('khachhang/danh_sach',compact('dsKhachHang'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $phanquyen=PhanQuyen::all();
        return view('khachhang/them_moi',compact('phanquyen'));
    }

    public function xulithemmoi(Request $request)
    {
        $phanquyen=PhanQuyen::all();
        $khachhang=new KhachHang();
        $khachhang->ten = $request->ten;
        $khachhang->role_id = $request->role_id;
        $khachhang->account = $request->account;
        $khachhang->pass= $request->pass;
        $khachhang->dia_chi = $request->dia_chi;
        $khachhang->so_dien_thoai = $request->so_dien_thoai;
        $khachhang->email = $request->email;
        $khachhang->save();
        return redirect()->route('khach-hang.danh-sach');
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
    public function update(Request $request, string $id)
    {
        $khachhang= KhachHang::find($id);
        if (empty( $khachhang)) {
            return "Khach hang khong ton tai";
        }
        return view('khachhang/cap_nhat', compact('khachhang'));
    }

    public function xulicapnhat(Request $request,$id)
    {
        $khachhang = KhachHang::find($id);
        if (empty( $khachhang)) {
            return "Khach hang khong ton tai";
        }      
        $khachhang->ten = $request->ten;
        $khachhang->account = $request->account;
        $khachhang->pass = $request->pass;
        $khachhang->dia_chi = $request->dia_chi;
        $khachhang->so_dien_thoai = $request->so_dien_thoai;
        $khachhang->email = $request->email;
        $khachhang->save();
        return redirect()->route('khach-hang.danh-sach');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $khachhang=KhachHang::find($id);
        if(empty($khachhang))
        {
            return "Khách hàng không tồn tại";
        }
        $khachhang->delete();
        return redirect()->route('khach-hang.danh-sach');

    }
    public function destroy(string $id)
    {
        //
    }
}
