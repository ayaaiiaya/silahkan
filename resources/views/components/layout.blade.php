<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- Bootstrap & Icons -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    @yield('css')
</head>
<body>

<div class="wrapper" id="wrapper">

    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h5>SILAHKAN</h5>
            <p>Hello Admin !!</p>
        </div>
        <ul class="list-unstyled components">
            <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}">
                <a href="{{ route('admin.dashboard') }}"><i class="bi bi-grid"></i> Dashboard</a>
            </li>
            <li class="{{ Request::is('admin/umkm') ? 'active' : '' }}">
                <a href="{{ route('admin.umkm.index') }}"><i class="bi bi-shop"></i> Data UMKM</a>
            </li>
            <li class="{{ Request::is('admin/donasi') ? 'active' : '' }}">
                <a href="{{ route('admin.donasi.index')}}"><i class="bi bi-cash-stack"></i> Data Donasi</a>
            </li>
            <li class="{{ Request::is('admin/kemitraan') ? 'active' : '' }}">
                <a href="{{ route('admin.kemitraan.index') }}"><i class="bi bi-people"></i> Data Kemitraan</a>
            </li>
            <li class="{{ Request::is('admin/berita*') ? 'active' : '' }}">
                <a href="{{ route('admin.berita.index') }}"><i class="bi bi-newspaper"></i> Berita</a>
            </li>
        </ul>
    </nav>

    <!-- Page Content -->
    <div id="content">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button type="button" id="sidebarCollapse" class="navbar-btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="ml-2">@yield('header')</div>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow">
                            <a class="btn btn-white btn-sm" href="#" id="userDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 medium">
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                 aria-labelledby="userDropdown">
                                <a class="dropdown-item btn btn-white btn-sm" href="{{ route('admin.logout') }}">
                                    <i class="bi bi-box-arrow-right text-gray-400"></i> Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Main content -->
        @yield('content')
    </div>
</div>

<!-- JS -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" crossorigin="anonymous"></script>

<script>
$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
        $(this).toggleClass('active');
    });
});
</script>

@yield('js')

</body>
</html>
