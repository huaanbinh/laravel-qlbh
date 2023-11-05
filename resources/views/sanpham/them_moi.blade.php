
@extends('layout')
@section('themmoi')
<br>
<h1 class="h2">THÊM MỚI SẢN PHẨM</h1>
<form method="POST" action="{{route('san-pham.xl-them-moi')}}" enctype="multipart/form-data">
    @csrf
    <table>
    <tr>
        <label for="exampleDataList" class="form-label">Tên</label>
        <input class="form-control" list="datalistOptions" id="ten" name="ten" placeholder="Nhập tên sản phẩm">
    <tr>
    <br>
    <tr>
        <label for="exampleDataList" class="form-label">Loại Sản Phẩm</label>
        <select id="loaisanpham_id" name="loaisanpham_id">
                    @foreach($loaisanpham as $tenlsp){
                    <option value='{{$tenlsp->id}}'>
                        {{$tenlsp->ten}}
                    </option>
                    }
                    @endforeach
        </select>
    <tr>
    <br>
    <tr>
        <label for="exampleDataList" class="form-label">Giá</label>
        <input class="form-control" list="datalistOptions" id="gia" name="gia" placeholder="Nhập giá sản phẩm">
    <tr>
    <tr>
        <label for="exampleDataList" class="form-label">Số lượng</label>
        <input class="form-control" list="datalistOptions" id="soluong" name="soluong" placeholder="Nhập số lượng sản phẩm">
    <tr>
    <tr>
        <label for="exampleDataList" class="form-label">Mô tả</label>
        <input class="form-control" list="datalistOptions" id="mota" name="mota" placeholder="Mô tả sản phẩm">
    <tr>
    <tr>
    <br>
    <tr>
        <div class="mb-3">
            <label for="formFile" class="form-label">Chọn ảnh</label>
            <input class="form-control" type="file" multiple name="hinh_anh[]">
        </div>
    <tr>
    <br>
    <tr>
        <button class="btn btn-primary" type="submit">Thêm sản phẩm</button>
    <tr>
    </table>
</form>
<style>
    .button{
        padding: bottom 50px;
    }
</style>
@endsection
