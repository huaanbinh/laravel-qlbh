<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{asset('styles.css')}}" rel="stylesheet" />
</head>

<body>
    <div class="header">
        <h3>Quản Lý Học Sinh</h3>
    </div>
    <div class="menu">
        <ul>
            <li><a href="{{route('sinhvien.create')}}">Them Moi</a></li>
            <li> <a href="{{route('sinhvien.DanhSach')}}">Danh Sach</a></li>
        </ul>
        
       

    </div>
    <div>
        @yield('content')
    </div>
    <div class="footer">
        <h3>Chúc Các Bạn Vui Vẻ</h3>
    </div>
</body>

</html>
