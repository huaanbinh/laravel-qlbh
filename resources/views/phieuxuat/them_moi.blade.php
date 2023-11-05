
@extends('layout')
@section('themmoiphieuxuat')
<br>
<h1 class="h2">THÊM MỚI PHIẾU XUẤT</h1>
<form method="POST" action="{{route('phieu-xuat.xl-them-moi')}}">
    @csrf
    <table>
    <tr>
        <label for="exampleDataList" class="form-label">Mã đơn hàng</label>
        <input class="form-control" list="datalistOptions" id="ma" name="ma" placeholder="Nhập mã đơn hãng">
    <tr>
    <tr>
        <label for="exampleDataList" class="form-label">Người tạo</label>
        <input class="form-control" list="datalistOptions" id="nguoitao" name="nguoitao" placeholder="Nhập tên người tạo phiếu">
    <tr>
    <br>
    <tr>
    <label for="exampleDataList" class="form-label">Khách hàng</label>
        <select id="khachhang_id" name="khachhang_id">
                    @foreach($khachhang as $tenkh){
                    <option value='{{$tenkh->id}}'>
                        {{$tenkh->ten}}
                    </option>
                    }
                    @endforeach
        </select>
    <tr>
    <br>
    <tr>
    <label for="exampleDataList" class="form-label">Sản phẩm</label>
        <select id="sanpham_id" name="sanpham_id">
                    @foreach($sanpham as $tensp){
                    <option value='{{$tensp->id}}'>
                        {{$tensp->ten}}
                    </option>
                    }
                    @endforeach
        </select>
    <tr>
    <br>
    <tr>
        <label for="exampleDataList" class="form-label">Đơn giá</label>
        <input class="form-control" list="datalistOptions" id="dongia" name="dongia" placeholder="Nhập đơn giá sản phẩm">
    <tr>
    <tr>
        <label for="exampleDataList" class="form-label">Số lượng</label>
        <input class="form-control" list="datalistOptions" id="soluong" name="soluong" placeholder="Nhập số lượng sản phẩm">
    <tr>
    <tr>
        <label for="exampleDataList" class="form-label">Tổng tiền</label>
        <input class="form-control" list="datalistOptions" id="tongtien" name="tongtien" placeholder="Nhập tổng tiền">
    <tr>
    <tr>
        <label for="exampleDataList" class="form-label">Trạng thái</label>
        <input class="form-control" list="datalistOptions" id="trangthai" name="trangthai" placeholder="Nhập trạng thái phiếu xuất">
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
