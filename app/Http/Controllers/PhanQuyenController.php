<?php

namespace App\Http\Controllers;
use App\Models\PhanQuyen;
use App\Models\Admin;
use App\Models\KhachHang;
use Illuminate\Http\Request;

class PhanQuyenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dangnhap()
    {
        return view('dang-nhap');
    }
    public function xulydangnhap(Request $request,$id)
    {
        $phanquyen=KhachHang::find($id)||Admin::find($id);
        if($phanquyen->phanquyen->ten!='Admin')
        {
            return "khong phai admin";
        }
        return redirect()->route('nhan-vien.danh-sach')->with('message','Đăng nhập thành công');
    }
    public function danhsach()
    {
        
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
