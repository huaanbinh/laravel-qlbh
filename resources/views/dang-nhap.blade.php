
<form method="POST" action="{{route('phan-quyen.xl-dang-nhap,['id'=>$phanquyen->id]')}}">
    @csrf

    <div style="display: grid; justify-content: center; align-items:center; ">
        <p>ĐĂNG NHẬP HỆ THỐNG</p>
        <label for="">Tên đăng nhập</label>
        <input type="text" name="account"></input>
        <label for="">Mật khẩu</label>
        <input type="password" name="pass"></input>
        <button type="submit" style="
    height: 50;
    margin: 10px;
    background-color: #6262e9;
    color: white;">Đăng nhập</button>
    </div>
</form>
