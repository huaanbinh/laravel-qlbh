@extends('layout')
@section('danhsachnhacungcap')
<br>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">DANH SÁCH NHÀ CUNG CẤP</h1>
</div>
  <div class="table-responsive">
  <table class="table table-striped table-sm">
      <thead>
          <tr>
                <th scope="col">ID</th>
                <th scope="col">Tên</th>
                <th scope="col">Địa chỉ</th>
                <th scope="col">SĐT</th>
          </tr>
      </thead>
      <tbody>
          @forelse($dsNhaCungCap as $ncc)
          <tr>
              <td>{{ $ncc->id}}</td>
              <td>{{ $ncc->ten}}</td>
              <td>{{ $ncc->dia_chi}}</td>
              <td>{{ $ncc->so_dien_thoai}}</td>
              <td><a href="{{route('nha-cung-cap.xoa',['id'=>$ncc->id])}}">Xóa</a></td>
              <td><a href="{{route('nha-cung-cap.xl-cap-nhat',['id'=>$ncc->id])}}">Sửa</a></td>
          </tr>
          @empty
          <tr>
              <td colspan="5">Không có loại sản phẩm nào.</td>
          </tr>
          @endforelse
      </tbody>
  </table>
          <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group me-2">
                <a href="{{asset('nhacungcap/them_moi')}}" class="btn btn-sm btn-outline-secondary">Thêm mới</a>
              </div>
          </div>
  </div>
@endsection