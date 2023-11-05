@extends('layout')
@section('capnhatnhacungcap')
<br>
<h1 class="h2">CẬP NHẬT NHÀ CUNG CẤP</h1>
<form method="POST" action="{{route('nha-cung-cap.xl-cap-nhat',['id'=>$nhacungcap->id])}}">
    @csrf
<label for="exampleDataList" class="form-label">Tên</label>
<input class="form-control" list="datalistOptions" value="{{$nhacungcap->ten}}" id="ten" name="ten" >
<label for="exampleDataList" class="form-label">Địa chỉ</label>
<input class="form-control" list="datalistOptions" value="{{$nhacungcap->diachi}}" id="diachi" name="diachi" >
<label for="exampleDataList" class="form-label">Số điện thoại</label>
<input class="form-control" list="datalistOptions" value="{{$nhacungcap->sodienthoai}}" id="sodienthoai" name="sodienthoai" >
<br>
<button class="btn btn-primary" type="submit">Cập nhật</button>
</form>
@endsection
    
   