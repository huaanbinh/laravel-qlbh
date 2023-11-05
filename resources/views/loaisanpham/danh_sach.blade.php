@extends('layout')
@section('danh_sach')
<br>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">DANH SÁCH LOẠI SẢN PHẨM</h1>
</div>
  <div class="table-responsive">
  <table class="table table-striped table-sm">
      <thead>
          <tr>
              <th scope="col">Tên loại sản phẩm</th>
          </tr>
      </thead>
      <tbody>
          @forelse($dsLoaiSanPham as $loaisanpham)
          <tr>
              <td>{{ $loaisanpham->id}}</td>
              <td>{{ $loaisanpham->ten}}</td>
              <td><a href="{{route('loai-san-pham.xoa',['id'=>$loaisanpham->id])}}">Xóa</a></td>
              <td><a href="{{route('loai-san-pham.xl-cap-nhat',['id'=>$loaisanpham->id])}}">Sửa</a></td>
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
                <a href="{{asset('loaisanpham/them_moi')}}" class="btn btn-sm btn-outline-secondary">Thêm mới</a>
              </div>
          </div>
  </div>
@endsection