
@extends('layout')
@section('them_moi')
<br>
<h1 class="h2">THÊM MỚI LOẠI SẢN PHẨM</h1>
<form method="POST" action="{{route('loai-san-pham.xl-them-moi')}}">
    @csrf
    <label for="exampleDataList" class="form-label">Tên loại</label>
    <input class="form-control" list="datalistOptions" id="ten" name="ten" placeholder="Nhập tên loại sản phẩm">
    <br>
    <button class="btn btn-primary" type="submit">Thêm loại sản phẩm</button>
</form>
<style>
    .button{
        padding: bottom 50px;
    }
</style>
@endsection
