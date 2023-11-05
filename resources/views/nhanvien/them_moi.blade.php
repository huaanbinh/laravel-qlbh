
@extends('layout')
@section('themmoinhanvien')
<br>
<h1 class="h2">THÊM MỚI NHÂN VIÊN</h1>
<form method="POST" action="{{route('nhan-vien.xl-them-moi')}}" >
    @csrf
    <label for="exampleDataList" class="form-label">Tên nhân viên</label>
    <input class="form-control" list="datalistOptions" id="ten" name="ten" placeholder="Nhập tên nhân viên">
    <label for="exampleDataList" class="form-label">Tài khoản</label>
    <input class="form-control" list="datalistOptions" id="account" name="account" placeholder="Nhập tài khoản nhân viên">
    <label for="exampleDataList" class="form-label">Mật khẩu</label>
    <input class="form-control" list="datalistOptions" id="pass" name="pass" placeholder="Nhập mật khẩu nhân viên">
    <label for="exampleDataList" class="form-label">Địa chỉ</label>
    <input class="form-control" list="datalistOptions" id="dia_chi" name="dia_chi" placeholder="Nhập địa chỉ nhân viên">
    <label for="exampleDataList" class="form-label">Số điện thoại</label>
    <input class="form-control" list="datalistOptions" id="so_dien_thoai" name="so_dien_thoai" placeholder="Nhập số điện thoại nhân viên">
    <label for="exampleDataList" class="form-label">Email</label>
    <input class="form-control" list="datalistOptions" id="email" name="email" placeholder="Nhập email nhân viên">
    <br>
    <button class="btn btn-primary" type="submit">Thêm nhân viên</button>
</form>
<style>
    .button{
        padding: bottom 50px;
    }
</style>
@endsection
