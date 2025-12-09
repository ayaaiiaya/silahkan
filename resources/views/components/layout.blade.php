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
    <style>
        /* Tambahan CSS untuk sidebar footer */
        #sidebar {
            display: flex;
            flex-direction: column;
            height: 100vh;
        }
        
        .components {
            flex: 1;
            overflow-y: auto;
        }
        
        .sidebar-footer {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding: 15px;
            background: rgba(0, 0, 0, 0.1);
            margin-top: auto;
        }
        
        .sidebar-footer .user-info {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
        
        .sidebar-footer .user-icon {
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
            font-size: 18px;
        }
        
        .sidebar-footer .user-details {
            flex: 1;
        }
        
        .sidebar-footer .user-name {
            font-weight: 500;
            font-size: 14px;
            color: white;
            margin-bottom: 2px;
        }
        
        .sidebar-footer .user-role {
            font-size: 12px;
            color: rgba(255, 255, 255, 0.7);
        }
        
        .logout-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            padding: 8px 15px;
            background: rgba(220, 53, 69, 0.2);
            border: 1px solid rgba(220, 53, 69, 0.3);
            border-radius: 5px;
            color: white;
            text-decoration: none;
            font-size: 14px;
            transition: all 0.3s ease;
        }
        
        .logout-btn:hover {
            background: rgba(220, 53, 69, 0.3);
            border-color: rgba(220, 53, 69, 0.5);
            text-decoration: none;
            color: white;
        }
        
        .logout-btn i {
            margin-right: 8px;
            font-size: 16px;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .sidebar-footer {
                display: none;
            }
            
            .navbar .dropdown-menu {
                display: block !important;
            }
        }
    </style>
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
        
        <!-- Sidebar Footer -->
        <div class="sidebar-footer">
            <div class="user-info">
                <div class="user-icon">
                    <i class="bi bi-person-circle"></i>
                </div>
                <div class="user-details">
                    <div class="user-name">{{ auth('admin')->user()->name ?? 'Administrator' }}</div>
                    <div class="user-role">Admin Panel</div>
                </div>
            </div>
            <a href="{{ route('admin.logout') }}" class="logout-btn" onclick="return confirmLogout()">
                <i class="bi bi-box-arrow-right"></i> Logout
            </a>
        </div>
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
                                    <i class="bi bi-person-circle"></i> {{ auth('admin')->user()->name ?? 'Admin' }}
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                 aria-labelledby="userDropdown">
                                <a class="dropdown-item btn btn-white btn-sm" href="{{ route('admin.logout') }}" onclick="return confirmLogout()">
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
    
    // Dropdown user di navbar
    $('#userDropdown').on('click', function(e) {
        e.preventDefault();
        $(this).next('.dropdown-menu').toggleClass('show');
    });
    
    // Tutup dropdown saat klik di luar
    $(document).on('click', function(e) {
        if (!$(e.target).closest('#userDropdown').length) {
            $('.dropdown-menu').removeClass('show');
        }
    });
});

function confirmLogout() {
    Swal.fire({
        title: 'Konfirmasi Logout',
        text: 'Apakah Anda yakin ingin keluar?',
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Logout',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = "{{ route('admin.logout') }}";
        }
    });
    return false;
}
</script>

@yield('js')

</body>
</html>