@extends('layout')
@section('danhsachkh')
<br>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">DANH SÁCH KHÁCH HÀNG</h1>
</div>
  <div class="table-responsive">
  <table class="table table-striped table-sm">
      <thead>
          <tr>
                <th scope="col">ID</th>
                <th scope="col">Tên khách hàng</th>
                <th scope="col">Tài khoản</th>
                <th scope="col">Mật khẩu</th>
                <th scope="col">Địa chỉ</th>
                <th scope="col">SDT</th>
                <th scope="col">Email</th>
                <th scope="col">Thao tác</th>
          </tr>
      </thead>
      <tbody>
          @forelse($dsKhachHang as $khachhang)
          <tr>
              <td>{{ $khachhang->id}}</td>
              <td>{{ $khachhang->ten}}</td>
              <td>{{ $khachhang->account}}</td>
              <td>{{ $khachhang->pass}}</td>
              <td>{{ $khachhang->dia_chi}}</td>
              <td>{{ $khachhang->so_dien_thoai}}</td>
              <td>{{ $khachhang->email}}</td>
              <td><a href="{{route('khach-hang.xoa',['id'=>$khachhang->id])}}">Xóa</a></td>
              <td><a href="{{route('khach-hang.xl-cap-nhat',['id'=>$khachhang->id])}}">Sửa</a></td>
          </tr>
          @empty
          <tr>
              <td colspan="5">Không có khách hàng nào.</td>
          </tr>
          @endforelse
      </tbody>
  </table>
          <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group me-2">
                <a href="{{asset('khachhang/them_moi')}}" class="btn btn-sm btn-outline-secondary">Thêm mới</a>
              </div>
          </div>
  </div>
@endsection