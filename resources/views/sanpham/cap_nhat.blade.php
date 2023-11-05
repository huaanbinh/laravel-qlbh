@extends('layout')
@section('capnhat')
<br>
<h1 class="h2">CẬP NHẬT SẢN PHẨM</h1>
<form method="POST" action="{{route('san-pham.xl-cap-nhat',['id'=>$sanpham->id])}}">
    @csrf
<label for="exampleDataList" class="form-label">Tên</label>
<input class="form-control" list="datalistOptions" value="{{$sanpham->ten}}" id="ten" name="ten" >
<label for="exampleDataList" class="form-label">Giá</label>
<input class="form-control" list="datalistOptions" value="{{$sanpham->gia}}" id="gia" name="gia">
<label for="exampleDataList" class="form-label">Số lượng</label>
<input class="form-control" list="datalistOptions" value="{{$sanpham->soluong}}" id="soluong" name="soluong">
<label for="exampleDataList" class="form-label">Mô tả</label>
<input class="form-control" list="datalistOptions" value="{{$sanpham->mota}}" id="mota" name="mota">
<br>
<button class="btn btn-primary" type="submit">Cập nhật</button>
</form>
@endsection
    
   