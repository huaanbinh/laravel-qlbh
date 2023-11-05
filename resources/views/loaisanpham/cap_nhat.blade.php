@extends('layout')
@section('cap_nhat')
<br>
<h1 class="h2">CẬP NHẬT LOẠI SẢN PHẨM</h1>
<form method="POST" action="{{route('loai-san-pham.xl-cap-nhat',['id'=>$loaisanpham->id])}}">
    @csrf
<label for="exampleDataList" class="form-label">Tên</label>
<input class="form-control" list="datalistOptions" value="{{$loaisanpham->ten}}" id="ten" name="ten" >
<br>
<button class="btn btn-primary" type="submit">Cập nhật</button>
</form>
@endsection
    
   