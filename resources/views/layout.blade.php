<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Quản lý bán hàng</title>
<link href="{{asset('bootstrap-5.2.3/css/bootstrap.min.css')}}" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
      .h2.h2 {
        padding-left: 500px;
        }
        .h1 {
          margin-top: 0;
          margin-bottom: 0.5rem;
          font-weight: 500;
          line-height: 1.2;
          text-align: center;
        }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="{{ asset('style.css')}}" rel="stylesheet">
  </head>
<body>
  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Quản Lí Bán Hàng</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Tìm kiếm" aria-label="Search">
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <a class="nav-link px-3" href="#">Đăng xuất</a>
      </div>
    </div>
  </header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">

          <li class="nav-item">
            <a class="nav-link" href="{{asset('sanpham/danh_sach')}}">
              <span data-feather="file" class="align-text-bottom"></span>
              Quản lý sản phẩm
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{asset('loaisanpham/danh_sach')}}">
              <span data-feather="file" class="align-text-bottom"></span>
              Quản lý loại sản phẩm
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{asset('khachhang/danh_sach')}}">
              <span data-feather="file" class="align-text-bottom"></span>
              Quản lý khách hàng
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{asset('nhanvien/danh_sach')}}">
              <span data-feather="file" class="align-text-bottom"></span>
              Quản lý nhân viên
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{asset('nhacungcap/danh_sach')}}">
              <span data-feather="file" class="align-text-bottom"></span>
              Quản lý nhà cung cấp
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{asset('phieuxuat/danh_sach')}}">
              <span data-feather="file" class="align-text-bottom"></span>
              Quản lý phiếu xuất
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{asset('phieunhap/danh_sach')}}">
              <span data-feather="file" class="align-text-bottom"></span>
              Quản lý phiếu nhập
            </a>
          </li>
        </ul>
      </div>
    </nav>      
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      @yield('themmoi')
      @yield('danhsach')
      @yield('capnhat')
      @yield('xoa')
      @yield('danh_sach')
      @yield('them_moi')
      @yield('cap_nhat')
      @yield('themmoikh')
      @yield('danhsachkh')
      @yield('capnhatkh')
      @yield('danhsachnhanvien')
      @yield('themmoinhanvien')
      @yield('capnhatnhanvien')
      @yield('themmoiadmin')
      @yield('danhsachadmin')
      @yield('danhsachphieunhap')
      @yield('themmoiphieunhap')
      @yield('capnhatphieunhap')
      @yield('themmoiphieuxuat')
      @yield('danhsachphieuxuat')
      @yield('capnhatphieuxuat')
      @yield('themmoinhacungcap')
      @yield('danhsachnhacungcap')
      @yield('capnhatnhacungcap')
    
    </main>
  </div>
</div>
    <script src="{{asset('bootstrap-5.2.3/js/bootstrap.bundle.min.js')}}"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
      <script src="{{asset('main.js')}}"></script>
</body>
</html>
