@extends('layout')
@section('capnhatphieuxuat')
<br>
<h1 class="h2">CẬP NHẬT PHIẾU XUẤT</h1>
<form method="POST" action="{{route('phieu-xuat.xl-cap-nhat',['id'=>$phieuxuat->id])}}">
    @csrf
    <label for="exampleDataList" class="form-label">Sản phẩm</label>
        <select id="sanpham_id" name="sanpham_id">
                    @foreach($sanpham as $tensp){
                    <option value='{{$tensp->id}}'>
                        {{$tensp->ten}}
                    </option>
                    }
                    @endforeach
        </select>
<br>

<label for="exampleDataList" class="form-label">Đơn giá</label>
<input class="form-control" list="datalistOptions" id="dongia" name="dongia" placeholder="Nhập đơn giá sản phẩm">
<label for="exampleDataList" class="form-label">Số lượng</label>
<input class="form-control" list="datalistOptions" value="{{$phieuxuat->soluong}}" id="soluong" name="soluong">
<label for="exampleDataList" class="form-label">Tổng tiền</label>
<input class="form-control" list="datalistOptions" value="{{$phieuxuat->tongtien}}" id="tongtien" name="tongtien">
<label for="exampleDataList" class="form-label">Trạng thái</label>
<input class="form-control" list="datalistOptions" value="{{$phieuxuat->trangthai}}" id="trangthai" name="trangthai">
<br>
<button class="btn btn-primary" type="submit">Cập nhật</button>
</form>
@endsection
    
   