@extends('layout')
@section('capnhatkh')
<br>
<h1 class="h2">CẬP NHẬT THÔNG TIN KHÁCH HÀNG</h1>
<form method="POST" action="{{route('khach-hang.xl-cap-nhat',['id'=>$khachhang->id])}}">
    @csrf
    <label for="exampleDataList" class="form-label">Tên khách hàng</label>
    <input class="form-control" list="datalistOptions" value="{{$khachhang->ten}}" id="ten" name="ten" placeholder="Nhập tên khách hàng">
    <label for="exampleDataList" class="form-label">Tài khoản</label>
    <input class="form-control" list="datalistOptions" value="{{$khachhang->account}}" id="account" name="account" placeholder="Nhập tài khoản khách hàng">
    <label for="exampleDataList" class="form-label">Mật khẩu</label>
    <input class="form-control" list="datalistOptions" value="{{$khachhang->pass}}" id="pass" name="pass" placeholder="Nhập mật khẩu khách hàng">
    <label for="exampleDataList" class="form-label">Địa chỉ</label>
    <input class="form-control" list="datalistOptions" value="{{$khachhang->dia_chi}}" id="dia_chi" name="dia_chi" placeholder="Nhập địa chỉ khách hàng">
    <label for="exampleDataList" class="form-label">Số điện thoại</label>
    <input class="form-control" list="datalistOptions" value="{{$khachhang->so_dien_thoai}}" id="so_dien_thoai" name="so_dien_thoai" placeholder="Nhập số điện thoại khách hàng">
    <label for="exampleDataList" class="form-label">Email</label>
    <input class="form-control" list="datalistOptions" value="{{$khachhang->email}}" id="email" name="email" placeholder="Nhập email khách hàng">
<br>
<button class="btn btn-primary" type="submit">Cập nhật</button>
</form>
@endsection
    
   