@extends('layout')
@section('danhsachadmin')
<br>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">DANH SÁCH ADMIN</h1>
</div>
  <div class="table-responsive">
  <table class="table table-striped table-sm">
      <thead>
          <tr>
                <th scope="col">ID</th>
                <th scope="col">Tên Admin</th>
                <th scope="col">Tài khoản</th>
                <th scope="col">Mật khẩu</th>
                <th scope="col">Địa chỉ</th>
                <th scope="col">SDT</th>
                <th scope="col">Email</th>
                <th scope="col">Thao tác</th>
          </tr>
      </thead>
      <tbody>
          @forelse($dsAdmin as $Admin)
          <tr>
              <td>{{ $Admin->id}}</td>
              <td>{{ $Admin->ten}}</td>
              <td>{{ $Admin->account}}</td>
              <td>{{ $Admin->pass}}</td>
              <td>{{ $Admin->dia_chi}}</td>
              <td>{{ $Admin->so_dien_thoai}}</td>
              <td>{{ $Admin->email}}</td>
              <td><a href="">Xóa</a></td>
              <td><a href="">Sửa</a></td>
          </tr>
          @empty
          <tr>
              <td colspan="5">Không có Admin nào.</td>
          </tr>
          @endforelse
      </tbody>
  </table>
          <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group me-2">
                <a href="{{asset('admin/them_moi')}}" class="btn btn-sm btn-outline-secondary">Thêm mới</a>
              </div>
          </div>
  </div>
@endsection