
@extends('layout')
@section('themmoiadmin')
<br>
<h1 class="h2">THÊM MỚI ADMIN</h1>
<form method="POST" action="{{route('admin.xl-them-moi')}}" >
    @csrf
    <label for="exampleDataList" class="form-label">Tên Admin</label>
    <input class="form-control" list="datalistOptions" id="ten" name="ten" placeholder="Nhập tên Admin">
    <label for="exampleDataList" class="form-label">Tài khoản</label>
    <input class="form-control" list="datalistOptions" id="account" name="account" placeholder="Nhập tài khoản Admin">
    <label for="exampleDataList" class="form-label">Mật khẩu</label>
    <input class="form-control" list="datalistOptions" id="pass" name="pass" placeholder="Nhập mật khẩu Admin">
    <label for="exampleDataList" class="form-label">Địa chỉ</label>
    <input class="form-control" list="datalistOptions" id="dia_chi" name="dia_chi" placeholder="Nhập địa chỉ Admin">
    <label for="exampleDataList" class="form-label">Số điện thoại</label>
    <input class="form-control" list="datalistOptions" id="so_dien_thoai" name="so_dien_thoai" placeholder="Nhập số điện thoại Admin">
    <label for="exampleDataList" class="form-label">Email</label>
    <input class="form-control" list="datalistOptions" id="email" name="email" placeholder="Nhập email Admin">
    <br>
    <button class="btn btn-primary" type="submit">Thêm Admin</button>
</form>
<style>
    .button{
        padding: bottom 50px;
    }
</style>
@endsection
