<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SILAHKAN | Sistem Informasi Limbah Kain</title>
  <link rel="stylesheet" href="{{ asset('css/home.css') }}" />
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

  <!-- ===== HERO SECTION ===== -->
  <section class="hero">
    <div class="hero-content">
      <h1 class="welcome-text">SELAMAT DATANG</h1>
      <h2 class="app-name">di SILAHKAN</h2>
      <p>Sistem Informasi Pengelolaan Limbah Kain</p>
    </div>

    <div class="hero-image">
      <img src="image/recycle.png" alt="Limbah Kain" />
    </div>
  </section>

  <!-- ===== ABOUT ===== -->
  <section class="about" id="tentang">
    <div class="about-container">
      <div class="about-images">
        <img src="image/limbah1.jpeg" alt="limbah kain 1">
        <img src="image/limbah2.jpg" alt="limbah kain 2">
        <img src="image/limbah3.jpg" alt="limbah kain 3">
        <img src="image/limbah4.jpg" alt="limbah kain 4">
      </div>

      <div class="about-text">
        <h2>Tentang Kami</h2>
        <p><strong>SILAHKAN</strong> adalah organisasi nirlaba yang berfokus pada pengelolaan limbah kain rumah tangga berbasis ekonomi sirkular...</p>
        <p>Melalui inovasi, kolaborasi, dan edukasi berkelanjutan...</p>
        <a href="#" class="about-btn">Baca Selengkapnya →</a>
      </div>
    </div>
  </section>

  <!-- ===== STEPS ===== -->
  <section class="steps">
    <div class="steps-container">
      <h2>Hidup Lebih Bijak, Mulai dari Kain</h2>
      <p class="subtitle">
        Langkah kecil bisa membawa perubahan besar. <br>
        Mulai dari mengenal, mengolah, dan menyebarkan semangat daur ulang kain.
      </p>

      <div class="steps-grid">
        <div class="step-card">
          <img src="image/basket.png" alt="Pilah Kainmu">
          <h3>🧺 Pilah Kainmu</h3>
          <p>Pisahkan kain yang masih bisa digunakan dan siap didaur ulang.</p>
        </div>

        <div class="step-card">
          <img src="image/sewing.png" alt="Daur Ulang dan Kreasi">
          <h3>🧵 Daur Ulang & Kreasi</h3>
          <p>Ubah sisa kain jadi karya bernilai bersama mitra UMKM.</p>
        </div>

        <div class="step-card">
          <img src="image/hand.png" alt="Sebarkan Kesadaran">
          <h3>💬 Sebarkan Kesadaran</h3>
          <p>Ajak teman dan keluarga ikut memilah dan mencintai bumi.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== DAMPAK ===== -->
  <section class="impact-section" id="dampak">
    <h2 class="impact-title">Dampak Nyata Kami</h2>
    <p class="impact-subtitle">Angka yang menunjukkan kontribusi bersama dalam mengurangi limbah kain.</p>

    <div class="impact-stats">
      <div class="impact-card">
        <h3 class="count" data-target="1250">0</h3>
        <p>Kilogram Kain Terkumpul</p>
      </div>
      <div class="impact-card">
        <h3 class="count" data-target="350">0</h3>
        <p>Penerima Donasi</p>
      </div>
      <div class="impact-card">
        <h3 class="count" data-target="870">0</h3>
        <p>UMKM Berkolaborasi</p>
      </div>
    </div>
  </section>

  <!-- ===== REVIEW ===== -->
  <section class="review-section" id="ulasan">
    <h2 class="review-title">Apa Kata Mereka?</h2>
    <p class="review-subtitle">Cerita dari para pengguna dan mitra yang telah bergabung dalam gerakan peduli limbah kain.</p>

    <div class="review-container">
      <!-- Card review (sama seperti punyamu) -->
      @foreach (range(1,9) as $i)
      <div class="review-card">
        <p class="review-text">“SILAHKAN benar-benar membuat saya sadar bahwa limbah kain rumah tangga bisa diolah lagi.”</p>
        <div class="review-user">
          <img src="image/karina.jpg" alt="User">
          <div>
            <h4>Karin</h4>
            <span>Ibu Rumah Tangga</span>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </section>

  <!-- ===== FOOTER ===== -->
  <footer class="footer">
    <div class="footer-container">
      <div class="footer-left">
        <img src="{{ asset('image/logoR.png') }}" alt="Logo SILAHKAN" class="footer-logo" />
        <div class="footer-brand">
          <h3>SILAHKAN</h3>
          <p>Sistem Informasi Limbah Kain</p>
        </div>

        <ul class="footer-contact">
          <li><span>📍</span> Jl. Raya Kalimalang No.08, Jakarta Timur</li>
          <li><span>✉️</span> silahkan.co.id</li>
          <li><span>📞</span> +62 812 3456 7890</li>
          <li><span>📷</span> silahkan.id</li>
        </ul>
      </div>

      <div class="footer-right">
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Profil</a></li>
          <li><a href="#">Layanan</a></li>
          <li><a href="#">Berita</a></li>
          <li><a href="#">Kontak Kami</a></li>
        </ul>
      </div>
    </div>

    <div class="footer-bottom">
      <p>&copy; 2025 SILAHKAN. All rights reserved.</p>
    </div>
  </footer>

  <!-- ===== SCRIPT ===== -->
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

    // Counter animation
    const counters = document.querySelectorAll('.count');
    const speed = 150;
    let started = false;
    const startCounting = () => {
      counters.forEach(counter => {
        const updateCount = () => {
          const target = +counter.getAttribute('data-target');
          const count = +counter.innerText;
          const increment = target / speed;

          if (count < target) {
            counter.innerText = Math.ceil(count + increment);
            setTimeout(updateCount, 20);
          } else {
            counter.innerText = target.toLocaleString();
          }
        };
        updateCount();
      });
    };
    window.addEventListener('scroll', () => {
      const section = document.querySelector('.impact-section');
      const sectionTop = section.getBoundingClientRect().top;
      if (sectionTop < window.innerHeight && !started) {
        started = true;
        startCounting();
      }
    });

    // Burger menu toggle
    const menuToggle = document.getElementById('menu-toggle');
    const navLinks = document.getElementById('nav-links');
    menuToggle.addEventListener('click', () => {
      menuToggle.classList.toggle('active');
      navLinks.classList.toggle('show');
    });

  </script>

  <script>
    // Tutup sidebar saat klik di luar
    document.addEventListener('click', (e) => {
    const nav = document.getElementById('nav-links');
    const toggle = document.getElementById('menu-toggle');
    const dropdown = e.target.closest('.dropdown');

    // Kalau klik di luar navbar dan burger
    if (!nav.contains(e.target) && !toggle.contains(e.target)) {
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

</body>
</html>
