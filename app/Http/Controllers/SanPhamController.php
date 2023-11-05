<?php

namespace App\Http\Controllers;
use App\Models\SanPham;
use App\Models\LoaiSanPham;
use App\Models\HinhAnh;
use Illuminate\Http\Request;

class SanPhamController extends Controller
{
    public function danhsach()
    {
        $dsSanPham = SanPham::all();
        $dshinhanh=HinhAnh::all();
        return view('sanpham/danh_sach', compact('dsSanPham','dshinhanh'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dsSanPham = SanPham::all();
        $loaisanpham = LoaiSanPham::all();
        return view('sanpham/them_moi', compact('dsSanPham','loaisanpham'));
    }
    public function xulithemmoi(Request $request)
    {   
        $sanpham=new SanPham();
        if(empty($sanpham))
        {
            return redirect()->route('san-pham.them-moi')->with('message', 'Vui lòng nhập đầy đủ thông tin');
        }
        else{
        $sanpham->ten = $request->ten;
        $sanpham->loaisanpham_id = $request->loaisanpham_id;
        $sanpham->gia = $request->gia;
        $sanpham->soluong = $request->soluong;
        $sanpham->mota = $request->mota;
        $sanpham->save();

        $files=$request->hinh_anh;
        
        foreach($files as $hinhanh){
            $pic = new HinhAnh;
            $pic->san_pham_id=$sanpham->id;
            $path=$hinhanh->store('img');
            $pic->duong_dan=$path;
            $pic->save();
        }
        //return "redirect()->route('san-pham.xl-them-moi');"
        return redirect()->route('san-pham.danh-sach')->with('thong-bao', 'Thêm thành công');
        }
    }
    /**
     * Store a newly created resource in storage.
     */
    public function delete($id)
    {
        $sanpham=SanPham::find($id);
        if(empty($sanpham))
        {
            return "Sản phẩm không tồn tại";
        }
        $sanpham->delete();
        return redirect()->route('san-pham.danh-sach')->with('thong-bao','Xóa thành công');
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
        $sanpham = SanPham::find($id);
        if (empty( $sanpham)) {
            return "San pham khong ton tai";
        }
        return view('sanpham/cap_nhat', compact('sanpham'));
    }

    public function xulicapnhat(Request $request,$id)
    {
        $sanpham = SanPham::find($id);
        if (empty( $sanpham)) {
            return "San pham khong ton tai";
        }      
        $sanpham->ten = $request->ten;
        $sanpham->gia = $request->gia;
        $sanpham->soluong = $request->soluong;
        $sanpham->mota = $request->mota;
        $sanpham->save();
        return redirect()->route('san-pham.danh-sach');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
