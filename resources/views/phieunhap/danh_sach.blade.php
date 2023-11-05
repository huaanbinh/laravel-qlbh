
@extends('layout')
@section('danhsachphieunhap')
<br>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">DANH SÁCH PHIẾU NHẬP</h1>
</div>
<div class="table-responsive">
<table class="table table-striped table-sm">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nhà Cung Cấp</th>
            <th scope="col">Sản phẩm</th>
            <th scope="col">Số lượng</th>
            <th scope="col">Giá nhập</th>
            <th scope="col">Giá bán</th>
        </tr>
    </thead>
    <tbody>
        @forelse($dsphieunhap as $phieunhap)
            <tr>
                <td>{{ $phieunhap->id }}</td>
                <td>{{ $phieunhap->nhacungcap->ten }}</td>
                <td>{{ $phieunhap->sanpham->ten }}</td>
                <td>{{ $phieunhap->so_luong}}</td>
                <td>{{ $phieunhap->gia_nhap}}</td>
                <td>{{ $phieunhap->gia_ban}}</td>
                <td><a href="{{route('phieu-nhap.xoa',['id'=>$phieunhap->id])}}">Xóa</a></td>
                <td><a href="{{route('phieu-nhap.xl-cap-nhat',['id'=>$phieunhap->id])}}">Sửa</a></td>
            </tr>
        @empty
            <tr>
                <td colspan="6">Không có sản phẩm nào.</td>
            </tr>
        @endforelse
    </tbody>
</table>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
              <a href="{{asset('phieunhap/them_moi')}}" class="btn btn-sm btn-outline-secondary">Thêm mới</a>
            </div>
        </div>
</div>

@endsection