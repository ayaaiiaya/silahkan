<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SILAHKAN | Sistem Informasi Limbah Kain</title>
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700;800&display=swap" rel="stylesheet">
</head>
<body>
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
        <li><a href="#">Home</a></li>
        <li><a href="{{ route('profile') }}">Profil</a></li>
        <li class="dropdown">
          <a href="#">Layanan ▾</a>
          <ul class="dropdown-menu">
            <li><a href="#">Donasi Kain</a></li>
            <li><a href="#">Kemitraan</a></li>
            <li><a href="#">Edukasi Daur Ulang</a></li>
          </ul>
        </li>
        <li><a href="#">Berita</a></li>
        <li><a href="#">Kontak Kami</a></li>
      </ul>
    </div>
  </nav>
</body>
</html>