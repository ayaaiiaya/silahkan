<!-- ===== NAVBAR ===== -->
<nav class="navbar">
    <div class="nav-container">
        <div class="logo">
            <img src="{{ asset('image/image.png') }}" alt="Logo SILAHKAN" />
        </div>

        <!-- Tombol Burger -->
        <div class="menu-toggle" id="menu-toggle">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <ul class="nav-links" id="nav-links">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('profile') }}">Profil</a></li>
            <li class="dropdown">
                <a href="#">Layanan ▾</a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route ('donasi.index') }}">Donasi Kain</a></li>
                    <li><a href="{{ route ('kemitraan.index') }}">Kemitraan</a></li>
                    <li><a href="{{ route('umkm.index') }}">UMKM</a></li>
                </ul>
            </li>
            <li><a href="#">Berita</a></li>
            <li>
            <a href="{{ route('kontak.index') }}" 
                   class="@if(request()->routeIs('kontak.index')) active @endif">
                   Kontak Kami
                </a>
            </li>
        </ul>
    </div>
</nav>

<script>
    // Navbar color on scroll
    window.addEventListener("scroll", function() {
        const navbar = document.querySelector(".navbar");
        if (window.scrollY > 50) {
            navbar.classList.add("scrolled");
        } else {
            navbar.classList.remove("scrolled");
        }
    });

    // Burger menu toggle
    const menuToggle = document.getElementById('menu-toggle');
    const navLinks = document.getElementById('nav-links');
    
    if (menuToggle) {
        menuToggle.addEventListener('click', () => {
            menuToggle.classList.toggle('active');
            navLinks.classList.toggle('show');
        });
    }

    // Tutup sidebar saat klik di luar
    document.addEventListener('click', (e) => {
        const nav = document.getElementById('nav-links');
        const toggle = document.getElementById('menu-toggle');
        const dropdown = e.target.closest('.dropdown');

        // Kalau klik di luar navbar dan burger
        if (nav && toggle && !nav.contains(e.target) && !toggle.contains(e.target)) {
            nav.classList.remove('show');
            toggle.classList.remove('active');
        }

        // Kalau klik dropdown "Layanan" di sidebar
        if (dropdown) {
            const dropdownMenu = dropdown.querySelector('.dropdown-menu');
            dropdownMenu.classList.toggle('show');
        } else {
            // Tutup dropdown lain kalau klik di luar
            document.querySelectorAll('.dropdown-menu').forEach(menu => {
                menu.classList.remove('show');
            });
        }
    });

    // Tutup sidebar kalau link non-dropdown diklik
    document.querySelectorAll('.nav-links a').forEach(link => {
        link.addEventListener('click', (e) => {
            const parent = link.parentElement;
            // Kalau bukan dropdown, baru tutup sidebar
            if (!parent.classList.contains('dropdown')) {
                document.getElementById('nav-links').classList.remove('show');
                document.getElementById('menu-toggle').classList.remove('active');
            } else {
                e.preventDefault(); // biar gak langsung nutup pas buka dropdown
            }
        });
    });
</script>