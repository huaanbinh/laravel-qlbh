
@extends('layout')
@section('themmoiphieunhap')
<br>
<h1 class="h2">THÊM MỚI PHIẾU NHẬP</h1>
<form method="POST" action="{{route('phieu-nhap.xl-them-moi')}}">
    @csrf
    <table>
    <tr>
        <label for="exampleDataList" class="form-label">Nhà cung cấp</label>
        <select id="nhacungcap_id" name="nhacungcap_id">
                    @foreach($dsNhaCungCap as $ncc){
                    <option value='{{$ncc->id}}'>
                        {{$ncc->ten}}
                    </option>
                    }
                    @endforeach
        </select>
    <tr>
    <br>
    <tr>
        <label for="exampleDataList" class="form-label">Sản phẩm</label>
        <select id="sanpham_id" name="sanpham_id">
                    @foreach($dsSanPham as $tensp){
                    <option value='{{$tensp->id}}'>
                        {{$tensp->ten}}
                    </option>
                    }
                    @endforeach
        </select>
    <tr>
    <br>
    <tr>
        <label for="exampleDataList" class="form-label">Số lượng</label>
        <input class="form-control" list="datalistOptions" id="soluong" name="soluong" placeholder="Nhập số lượng sản phẩm">
    <tr>
    <tr>
        <label for="exampleDataList" class="form-label">Giá nhập</label>
        <input class="form-control" list="datalistOptions" id="gianhap" name="gianhap" placeholder="Nhập giá nhập sản phẩm">
    <tr>
    <tr>
        <label for="exampleDataList" class="form-label">Giá bán</label>
        <input class="form-control" list="datalistOptions" id="giaban" name="giaban" placeholder="Nhập giá bán sản phẩm">
    <tr>
    <br>
    <tr>
        <button class="btn btn-primary" type="submit">Thêm phiếu</button>
    <tr>
    </table>
</form>
<style>
    .button{
        padding: bottom 50px;
    }
</style>
@endsection
