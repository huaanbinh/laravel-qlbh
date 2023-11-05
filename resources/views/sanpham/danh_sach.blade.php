
@extends('layout')
@section('danhsach')
<br>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">DANH SÁCH SẢN PHẨM</h1>
</div>
<div class="table-responsive">
<table class="table table-striped table-sm">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Tên sản phẩm</th>
            <th scope="col">Loại sản phẩm</th>
            <th scope="col">Giá</th>
            <th scope="col">Số lượng</th>
            <th scope="col">Mô tả</th>
            <th scope="col">Hình ảnh</th>
        </tr>
    </thead>
    <tbody>
        @forelse($dsSanPham as $sanpham)
            <tr>
                <td>{{ $sanpham->id }}</td>
                <td>{{ $sanpham->ten}}</td>
                <td>{{ $sanpham->loaisanpham->ten}}</td>
                <td>{{ $sanpham->gia}}</td>
                <td>{{ $sanpham->soluong}}</td>
                <td>{{ $sanpham->mota}}</td>
                <td>
                @foreach($dshinhanh as $hinhanh)
                @if($hinhanh->san_pham_id==$sanpham->id)
                <img src="{{asset($hinhanh->duong_dan)}}" style="width:35px" />
                @endif
                @endforeach
                </td>
                <td><a href="{{route('san-pham.xoa',['id'=>$sanpham->id])}}">Xóa</a></td>
                <td><a href="{{route('san-pham.xl-cap-nhat',['id'=>$sanpham->id])}}">Sửa</a></td>
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
              <a href="{{asset('sanpham/them_moi')}}" class="btn btn-sm btn-outline-secondary">Thêm mới</a>
            </div>
        </div>
</div>

@endsection