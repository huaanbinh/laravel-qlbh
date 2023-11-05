
@extends('layout')
@section('themmoikh')
<br>
<h1 class="h2">THÊM MỚI KHÁCH HÀNG</h1>
<form method="POST" action="{{route('khach-hang.xl-them-moi')}}" >
    @csrf
    <label for="exampleDataList" class="form-label">Tên khách hàng</label>
    <input class="form-control" list="datalistOptions" id="ten" name="ten" placeholder="Nhập tên khách hàng">
        <label for="exampleDataList" class="form-label">Phân quyền</label>
        <select id="role_id" name="role_id">
                    @foreach($phanquyen as $tenphanquyen){
                    <option value='{{$tenphanquyen->id}}'>
                        {{$tenphanquyen->ten}}
                    </option>
                    }
                    @endforeach
        </select>
    <br>
    <label for="exampleDataList" class="form-label">Tài khoản</label>
    <input class="form-control" list="datalistOptions" id="account" name="account" placeholder="Nhập tài khoản khách hàng">
    <label for="exampleDataList" class="form-label">Mật khẩu</label>
    <input class="form-control" list="datalistOptions" id="pass" name="pass" placeholder="Nhập mật khẩu khách hàng">
    <label for="exampleDataList" class="form-label">Địa chỉ</label>
    <input class="form-control" list="datalistOptions" id="dia_chi" name="dia_chi" placeholder="Nhập địa chỉ khách hàng">
    <label for="exampleDataList" class="form-label">Số điện thoại</label>
    <input class="form-control" list="datalistOptions" id="so_dien_thoai" name="so_dien_thoai" placeholder="Nhập số điện thoại khách hàng">
    <label for="exampleDataList" class="form-label">Email</label>
    <input class="form-control" list="datalistOptions" id="email" name="email" placeholder="Nhập email khách hàng">
    <br>
    <button class="btn btn-primary" type="submit">Thêm khách hàng</button>
</form>
<style>
    .button{
        padding: bottom 50px;
    }
</style>
@endsection
