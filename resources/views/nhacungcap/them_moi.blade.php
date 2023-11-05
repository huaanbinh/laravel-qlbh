
@extends('layout')
@section('themmoinhacungcap')
<br>
<h1 class="h2">THÊM MỚI NHÀ CUNG CẤP</h1>
<form method="POST" action="{{route('nha-cung-cap.xl-them-moi')}}">
    @csrf
    <label for="exampleDataList" class="form-label">Tên nhà cung cấp</label>
    <input class="form-control" list="datalistOptions" id="ten" name="ten" placeholder="Nhập tên nhà cung cấp">
    <label for="exampleDataList" class="form-label">Địa chỉ</label>
    <input class="form-control" list="datalistOptions" id="diachi" name="diachi" placeholder="Nhập địa chỉ nhà cung cấp">
    <label for="exampleDataList" class="form-label">Số điện thoại</label>
    <input class="form-control" list="datalistOptions" id="sodienthoai" name="sodienthoai" placeholder="Nhập SĐT nhà cung cấp">
    <br>
    <button class="btn btn-primary" type="submit">Thêm nhà cung cấp</button>
</form>
<style>
    .button{
        padding: bottom 50px;
    }
</style>
@endsection
