@extends('layout')
@section('xoa')
<br>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">XÓA SẢN PHẨM</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
              <a href="{{asset('sanpham/danh_sach')}}" class="btn btn-sm btn-outline-secondary">Danh sách</a>
            </div>
        </div>
</div>
<label for="exampleDataList" class="form-label">ID</label>
<input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Nhập ID cần xóa">
<br>
<button class="btn btn-primary" type="submit">Xóa</button>
@endsection