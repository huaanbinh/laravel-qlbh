@extends('layout')
@section('capnhatphieunhap')
<br>
<h1 class="h2">CẬP NHẬT PHIẾU NHẬP</h1>
<form method="POST" action="{{route('phieu-nhap.xl-cap-nhat',['id'=>$phieunhap->id])}}">
    @csrf
    <label for="exampleDataList" class="form-label">Nhà cung cấp</label>
        <select id="nhacungcap_id" name="nhacungcap_id">
                    @foreach($dsNhaCungCap as $tenncc){
                    <option value='{{$tenncc->id}}'>
                        {{$tenncc->ten}}
                    </option>
                    }
                    @endforeach
        </select>
<br>
    <label for="exampleDataList" class="form-label">Sản phẩm</label>
        <select id="sanpham_id" name="sanpham_id">
                    @foreach($dsSanPham as $tensp){
                    <option value='{{$tensp->id}}'>
                        {{$tensp->ten}}
                    </option>
                    }
                    @endforeach
        </select>
<br>
<label for="exampleDataList" class="form-label">Số lượng</label>
<input class="form-control" list="datalistOptions" value="{{$phieunhap->soluong}}" id="soluong" name="soluong">
<label for="exampleDataList" class="form-label">Giá nhập</label>
<input class="form-control" list="datalistOptions" value="{{$phieunhap->gianhap}}" id="gianhap" name="gianhap">
<label for="exampleDataList" class="form-label">Giá bán</label>
<input class="form-control" list="datalistOptions" value="{{$phieunhap->giaban}}" id="giaban" name="giaban">
<br>
<button class="btn btn-primary" type="submit">Cập nhật</button>
</form>
@endsection
    
   