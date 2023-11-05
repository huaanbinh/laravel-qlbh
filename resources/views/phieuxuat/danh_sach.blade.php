
@extends('layout')
@section('danhsachphieuxuat')
<br>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">DANH SÁCH PHIẾU XUẤT</h1>
</div>
<div class="table-responsive">
<table class="table table-striped table-sm">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Mã đơn hàng</th>
            <th scope="col">Người tạo</th>
            <th scope="col">Khách hàng</th>
            <th scope="col">Sản phẩm</th>
            <th scope="col">Đơn giá</th>
            <th scope="col">Số lượng</th>
            <th scope="col">Tổng tiền</th>
            <th scope="col">Trạng thái</th>
        </tr>
    </thead>
    <tbody>
        @forelse($dsPhieuXuat as $phieuxuat)
            <tr>
                <td>{{ $phieuxuat->id}}</td>
                <td>{{ $phieuxuat->ma_don_hang}}</td>
                <td>{{ $phieuxuat->nguoi_tao}}</td>
                <td>{{ $phieuxuat->khachhang->ten}}</td>
                <td>{{ $phieuxuat->sanpham->ten}}</td>
                <td>{{ $phieuxuat->don_gia}}</td>
                <td>{{ $phieuxuat->so_luong}}</td>
                <td>{{ $phieuxuat->tong_tien}}</td>
                <td>{{ $phieuxuat->trang_thai}}</td>
                <td><a href="{{route('phieu-xuat.xoa',['id'=>$phieuxuat->id])}}">Xóa</a></td>
                <td><a href="{{route('phieu-xuat.xl-cap-nhat',['id'=>$phieuxuat->id])}}">Sửa</a></td>
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
              <a href="{{asset('phieuxuat/them_moi')}}" class="btn btn-sm btn-outline-secondary">Thêm mới</a>
            </div>
        </div>
</div>

@endsection