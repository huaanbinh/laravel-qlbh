<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SinhVienController;
use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\LoaiSanPhamController;
use App\Http\Controllers\KhachHangController;
use App\Http\Controllers\NhanVienController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HinhAnhController;
use App\Http\Controllers\PhanQuyenController;
use App\Http\Controllers\PhieuNhapController;
use App\Http\Controllers\PhieuXuatController;
use App\Http\Controllers\NhaCungCapController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('layout', [SinhVienController::class,'index']);
Route::get('cap_nhat/id', [SinhVienController::class,'update']);
//Upload
Route::get('upload', [UploadController::class,'upload']);
Route::get('multiupload', [UploadController::class,'multi_upload']);
Route::post('do-multiupload', [UploadController::class,'xl_multiupload'])->name('do-multiupload');
//SanPham
Route::get('sanpham/them_moi', [SanPhamController::class,'create'])->name('san-pham.them-moi');
Route::post('sanpham/them_moi', [SanPhamController::class,'xulithemmoi'])->name('san-pham.xl-them-moi');
Route::get('sanpham/danh_sach', [SanPhamController::class,'danhsach'])->name('san-pham.danh-sach');
Route::get('sanpham/cap_nhat/{id}', [SanPhamController::class,'update'])->name('san-pham.cap-nhat');
Route::post('sanpham/cap_nhat/{id}', [SanPhamController::class,'xulicapnhat'])->name('san-pham.xl-cap-nhat');
Route::get('sanpham/xoa/{id}', [SanPhamController::class,'delete'])->name('san-pham.xoa');
//LoaiSanPham
Route::get('loaisanpham/danh_sach', [LoaiSanPhamController::class,'danhsach'])->name('loai-san-pham.danh-sach');
Route::get('loaisanpham/them_moi', [LoaiSanPhamController::class,'create'])->name('loai-san-pham.them-moi');
Route::post('loaisanpham/them_moi', [LoaiSanPhamController::class,'xulithemmoi'])->name('loai-san-pham.xl-them-moi');
Route::get('loaisanpham/cap_nhat/{id}', [LoaiSanPhamController::class,'update'])->name('loai-san-pham.cap-nhat');
Route::post('loaisanpham/cap_nhat/{id}', [LoaiSanPhamController::class,'xulicapnhat'])->name('loai-san-pham.xl-cap-nhat');
Route::get('loaisanpham/xoa/{id}', [LoaiSanPhamController::class,'delete'])->name('loai-san-pham.xoa');
//Khách Hàng
Route::get('khachhang/danh_sach', [KhachHangController::class,'danhsach'])->name('khach-hang.danh-sach');
Route::get('khachhang/them_moi', [KhachHangController::class,'create'])->name('khach-hang.them-moi');
Route::post('khachhang/them_moi', [KhachHangController::class,'xulithemmoi'])->name('khach-hang.xl-them-moi');
Route::get('khachhang/cap_nhat/{id}', [KhachHangController::class,'update'])->name('khach-hang.cap-nhat');
Route::post('khachhang/cap_nhat/{id}', [KhachHangController::class,'xulicapnhat'])->name('khach-hang.xl-cap-nhat');
Route::get('khachhang/xoa/{id}', [KhachHangController::class,'delete'])->name('khach-hang.xoa');

//Nhân viên
Route::get('nhanvien/danh_sach', [NhanVienController::class,'danhsach'])->name('nhan-vien.danh-sach');
Route::get('nhanvien/them_moi', [NhanVienController::class,'create'])->name('nhan-vien.them-moi');
Route::post('nhanvien/them_moi', [NhanVienController::class,'xulithemmoi'])->name('nhan-vien.xl-them-moi');
Route::get('nhanvien/xoa/{id}', [NhanVienController::class,'delete'])->name('nhan-vien.xoa');
Route::get('nhanvien/cap_nhat/{id}', [NhanVienController::class,'update'])->name('nhan-vien.cap-nhat');
Route::post('nhanvien/cap_nhat/{id}', [NhanVienController::class,'xulicapnhat'])->name('nhan-vien.xl-cap-nhat');

//Dang Nhap
Route::get('dangnhap', [PhanQuyenController::class,'dangnhap'])->name('phan-quyen.dang-nhap');
Route::post('dangnhap/{id}', [PhanQuyenController::class,'xulydangnhap'])->name('phan-quyen.xl-dang-nhap');
//Admin
Route::get('admin/danh_sach', [AdminController::class,'danhsach'])->name('admin.danh-sach');
Route::get('admin/them_moi', [AdminController::class,'create'])->name('admin.them-moi');
Route::post('admin/them_moi', [AdminController::class,'xulithemmoi'])->name('admin.xl-them-moi');
//Phiếu nhập
Route::get('phieunhap/danh_sach', [PhieuNhapController::class,'danhsach'])->name('phieu-nhap.danh-sach');
Route::get('phieunhap/them_moi', [PhieuNhapController::class,'create'])->name('phieu-nhap.them-moi');
Route::post('phieunhap/them_moi', [PhieuNhapController::class,'xulythemmoi'])->name('phieu-nhap.xl-them-moi');
Route::get('phieunhap/xoa/{id}', [PhieuNhapController::class,'delete'])->name('phieu-nhap.xoa');
Route::get('phieunhap/cap_nhat/{id}', [PhieuNhapController::class,'update'])->name('phieu-nhap.cap-nhat');
Route::post('phieunhap/cap_nhat/{id}', [PhieuNhapController::class,'xulicapnhat'])->name('phieu-nhap.xl-cap-nhat');

//Phiếu Xuất
Route::get('phieuxuat/danh_sach', [PhieuXuatController::class,'danhsach'])->name('phieu-xuat.danh-sach');
Route::get('phieuxuat/them_moi', [PhieuXuatController::class,'create'])->name('phieu-xuat.them-moi');
Route::post('phieuxuat/them_moi', [PhieuXuatController::class,'xulythemmoi'])->name('phieu-xuat.xl-them-moi');
Route::get('phieuxuat/xoa/{id}', [PhieuXuatController::class,'delete'])->name('phieu-xuat.xoa');
Route::get('phieuxuat/cap_nhat/{id}', [PhieuXuatController::class,'update'])->name('phieu-xuat.cap-nhat');
Route::post('phieuxuat/cap_nhat/{id}', [PhieuXuatController::class,'xulicapnhat'])->name('phieu-xuat.xl-cap-nhat');
//Nhà cung cấp
Route::get('nhacungcap/them_moi', [NhaCungCapController::class,'create'])->name('nha-cung-cap.them-moi');
Route::post('nhacungcap/them_moi', [NhaCungCapController::class,'xulythemmoi'])->name('nha-cung-cap.xl-them-moi');
Route::get('nhacungcap/danh_sach', [NhaCungCapController::class,'danhsach'])->name('nha-cung-cap.danh-sach');
Route::get('nhacungcap/xoa/{id}', [NhaCungCapController::class,'delete'])->name('nha-cung-cap.xoa');
Route::get('nhacungcap/cap_nhat/{id}', [NhaCungCapController::class,'update'])->name('nha-cung-cap.cap-nhat');
Route::post('nhacungcap/cap_nhat/{id}', [NhaCungCapController::class,'xulicapnhat'])->name('nha-cung-cap.xl-cap-nhat');


