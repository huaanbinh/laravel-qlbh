<?php

namespace App\Http\Controllers;
use App\Models\KhachHang;
use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function dangnhap(){
        return view('admin/dang-nhap');
    }
    public function xulydangnhap(Request $rq){
        $login=Admin::where('account',$rq->account)->where('pass',$rq->pass)->first();
        if(empty($login))
        {
            return redirect()->route('admin.dang-nhap')->with('message','Đăng nhập thất bại');
        }
        session(['adminlogin'=>$login]);
        return redirect()->route('san-pham.danh-sach')->with('message','Đăng nhập thành công');
    }
    public function dangXuat(){
        session()->forget('adminlogin');
        return redirect()->route('admin.dang-nhap');
    }
    public function danhsach()
    {
        $dsAdmin = Admin::all();
        return view('admin/danh_sach',compact('dsAdmin'));
    }
    public function create()
    {
        return view('admin/them_moi');
    }
    public function xulithemmoi(Request $request)
    {
        $Admin=new Admin();
        $Admin->ten = $request->ten;
        $Admin->account = $request->account;
        $Admin->pass = $request->pass;
        $Admin->dia_chi = $request->dia_chi;
        $Admin->so_dien_thoai = $request->so_dien_thoai;
        $Admin->email = $request->email;
        $Admin->save();
        //return "redirect()->route('san-pham.xl-them-moi');"
        return redirect()->route('admin.danh-sach');
    }
}
