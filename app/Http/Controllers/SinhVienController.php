<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SinhVienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
       return view('layout');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('them_moi');
    }
    public function xulythemmoi(request $request)
    {
        $sinhvien=new SinhVien();
        $sinhvien->mssv=$request->mssv;
        $sinhvien->save();
        return "them sinh vien moi thanh cong";
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
    public function show()
    {
        return view('sanpham/danh_sach');
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
        return view('cap_nhat');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
