<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Profil | SILAHKAN</title>
  <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
  <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
  <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700;800&display=swap" rel="stylesheet">
</head>
<body>

  <!-- ===== NAVBAR ===== -->
  @include('components.navbar')

  <section class="about-section">
        <div class="about-container">
            <div class="img-wrapper">
            <div class="bg-box box1"></div>
            <div class="bg-box box2"></div>
            <img src="{{ asset('image/about-silahkan.png') }}" alt="Limbah Kain" class="about-img">
            </div>

            <div class="about-text">
            <h2><span class="highlight">Apa Itu</span> SILAHKAN?</h2>
            <p>
                <strong>SILAHKAN</strong> (Sistem Informasi Limbah Kain) adalah organisasi nirlaba yang berkomitmen menciptakan masa depan berkelanjutan melalui pengelolaan limbah kain rumah tangga berbasis ekonomi sirkular. 
                Kami percaya setiap potongan kain memiliki nilai dan dapat diubah menjadi sesuatu yang lebih bermakna bagi lingkungan dan masyarakat.
            </p>
            <p>
                Melalui inovasi, kolaborasi, serta kegiatan edukatif, SILAHKAN berupaya menginspirasi masyarakat untuk lebih bijak dalam mengelola limbah kain. 
                Kami ingin menciptakan ekosistem daur ulang yang inklusif dan berdampak nyata.
            </p>
            </div>
        </div>
    </section>

    <!-- ===== VISI SILAHKAN ===== -->
  <section class="visi-section">
    <div class="visi-container">
      <div class="visi-image">
        <img src="image/vision.jpg" alt="Visi" />
      </div>
      <div class="visi-text">
        <h2><span>Visi</span> SILAHKAN</h2>
        <p>
          Menjadi pelopor gerakan ekonomi sirkular yang berkelanjutan di Indonesia 
          melalui pengelolaan limbah kain yang ramah lingkungan, kreatif, dan berdampak sosial.
        </p>
      </div>
    </div>
  </section>

  <!-- ===== MISI SILAHKAN ===== -->
  <section class="misi-section">
    <div class="misi-container">

      <!-- TEKS MISI DI KIRI -->
      <div class="misi-text">
        <h2><span>Misi</span> SILAHKAN</h2>
        <ul>
          <li>1. Mengumpulkan dan mengelola limbah kain dari rumah tangga secara terstruktur dan berkelanjutan.</li>
          <li>2. Mendorong masyarakat untuk berpartisipasi aktif dalam program daur ulang tekstil.</li>
          <li>3. Mengembangkan inovasi produk dari hasil olahan limbah kain sebagai solusi ekonomi kreatif.</li>
          <li>4. Melakukan edukasi dan sosialisasi tentang gaya hidup berkelanjutan dan konsumsi bertanggung jawab.</li>
          <li>5. Berkolaborasi dengan pemerintah, komunitas, dan pelaku industri dalam mewujudkan lingkungan bebas limbah tekstil.</li>
        </ul>
      </div>

      <!-- GALERI GAMBAR DI KANAN -->
      <div class="misi-gallery">
        <div class="row">
          <div class="image-box small">
            <img src="{{ asset('image/misi-1.png') }}" alt="Mission">
          </div>
          <div class="image-box large">
            <img src="{{ asset('image/misi-2.png') }}" alt="Discussion 2">
          </div>
        </div>

        <div class="row">
          <div class="image-box large">
            <img src="{{ asset('image/misi-3.png') }}" alt="Discussion 1">
          </div>
          <div class="image-box small">
            <img src="{{ asset('image/misi-4.png') }}" alt="Handshake">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== STEPS ===== -->
  <section class="steps">
    <div class="steps-container">
      <h2>Program Unggulan / Kolaborasi</h2>
      <p class="subtitle">
        Mewujudkan Circular Economy Melalui Kemitraan dan Kreativitas
      </p>

      <div class="steps-grid">
        <div class="step-card">
          <img src="image/program-1.png" alt="Pilah Kainmu">
          <h3>Kemitraan Pengangkutan Limbah</h3>
          <p>Bermitra dengan komunitas lokal untuk mengumpulkan dan mendaur ulang limbah kain.</p>
          <div class="card-button">
            <a href="{{ route ('kemitraan.index') }}">Gabung Sekarang</a>
          </div>
        </div>

        <div class="step-card">
          <img src="image/program-2.png" alt="Daur Ulang dan Kreasi">
          <h3>Donasi Kain <br>Layak Pakai</h3>
          <p>Menyalurkan kain layak pakai ke rumah singgah dan komunitas prasejahtera.</p>
          <div class="card-button">
            <a href="#">Donasi Sekarang</a>
          </div>
        </div>

        <div class="step-card">
          <img src="image/program-3.png" alt="Sebarkan Kesadaran">
          <h3>Kolaborasi Dengan UMKM Daur Ulang</h3>
          <p>Berkolaborasi dengan UMKM kreatif yang mengubah limbah kain jadi produk bernilai.</p>
          <div class="card-button">
            <a href="#">Gabung Sekarang</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Edukasi dan Sosialisasi -->
  <section class="edukasi">
    <div class="edukasi-container">
      <h2>Edukasi dan Sosialisasi</h2>
      <p class="subtitle">
        Perubahan Besar Dimulai Dari Tindakan Kecil di Rumah Anda.
      </p>

      <div class="education-card">
        <img src="image/edukasi1.jpg" alt="Pilah Kain di Rumah">
        <div class="education-text">
          <h3>Pilah Kain di Rumah</h3>
          <p>
            Langkah awal yang sederhana namun penting. Kami mengajarkan masyarakat cara memilih kain layak pakai, kain perca, dan kain tidak terpakai agar bisa diproses sesuai kebutuhan daur ulang.
          </p>
        </div>
      </div>

      <div class="education-card reverse">
        <img src="image/edukasi2.jpg" alt="Daur Ulang Kreatif">
        <div class="education-text">
          <h3>Daur Ulang Kreatif</h3>
          <p>
            Kami mengadakan workshop daur ulang untuk mengubah limbah kain menjadi produk baru: tas, dompet, boneka, atau bahan kerajinan lainnya.
          </p>
        </div>
      </div>

      <div class="education-card">
        <img src="image/edukasi3.jpg" alt="Pilah Kain di Rumah">
        <div class="education-text">
          <h3>Kurangi Dampak Lingkungan</h3>
          <p>
            Melalui edukasi di sekolah dan komunitas, kami menjelaskan dampak 
            limbah tekstil terhadap bumi dan bagaimana tindakan kecil seperti daur ulang 
            bisa mengurangi emisi karbon serta limbah di TPA.
          </p>
        </div>
      </div>

      <div class="education-card reverse">
        <img src="image/edukasi4.jpg" alt="Daur Ulang Kreatif">
        <div class="education-text">
          <h3>Inovasi Daur Ulang</h3>
          <p>
            Kami mengajak masyarakat, UMKM, dan relawan untuk berkolaborasi menciptakan rantai ekonomi berkelanjutan. Setiap kain yang dikumpulkan menjadi sumber penghasilan baru bagi pengrajin lokal dan pelaku usaha hijau.
          </p>
        </div>
      </div>

    </div>
  </section>

  <!-- ===== KONTRIBUSI ===== -->
  <section class="kontribusi">
    <div class="kontribusi-container">
      <h2>Kontribusi Kami Terhadap Lingkungan</h2>
      <p class="subtitle">
        Setiap kilogram kain yang disumbangkan menjadi langkah kecil
      </p>

      <div class="kontribusi-grid">
        <div class="kontribusi-card">
          <img src="image/recycle1.png" alt="Pilah Kainmu">
          <h3>Mengurangi Sampah Tekstil</h3>
        </div>

        <div class="kontribusi-card">
          <img src="image/recycle3.png" alt="Daur Ulang dan Kreasi">
          <h3>Donasi Kain <br>Layak Pakai</h3>
        </div>

        <div class="kontribusi-card">
          <img src="image/recycle2.png" alt="Sebarkan Kesadaran">
          <h3>Kolaborasi Dengan UMKM Daur Ulang</h3>
        </div>
      </div>
    </div>
  </section>

  <!-- Include Footer Component -->
    @include('components.footer')
</body>
</html>