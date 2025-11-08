<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profil | SILAHKAN</title>
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700;800&display=swap" rel="stylesheet">
</head>
<body>

    <!-- Include Navbar Component -->
    @include('components.navbar')


    <!-- section about silahkan -->
    <section class="about-silahkan" id="tentang-silahkan">
        <div class="about-silahkan-container">
            <div class="about-silahkan-content">
                <div class="about-silahkan-images">
                    <img src="{{ asset('image/about-silahkan.png') }}" alt="Proses Daur Ulang SILAHKAN">
                </div>

                <div class="about-silahkan-text">
                    <h2>Apa itu <span class="highlight">SILAHKAN</span> ?</h2>

                    <p class="intro-text">
                        <strong>SILAHKAN</strong> adalah organisasi nirlaba yang berkomitmen menciptakan masa
                        depan berkelanjutan melalui pengelolaan limbah kain rumah tangga berbasis
                        ekonomi sirkular. Kami percaya bahwa setiap potongan kain memiliki nilai –
                        bukan sekadar sisa, tetapi peluang untuk diolah kembali menjadi sesuatu yang
                        bermanfaat bagi lingkungan dan masyarakat.
                    </p>

                    <div class="mission-text">
                        <p>
                            Melalui inovasi, kolaborasi, dan edukasi berkelanjutan, kami mengumpulkan dan
                            mengolah limbah kain menjadi produk bernilai guna. Dengan langkah kecil ini,
                            SILAHKAN berupaya menghadirkan perubahan nyata menuju lingkungan yang
                            lebih bersih, hijau, dan berdaya.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section vision -->
    <section class="silahkan-vision" id="visi-silahkan">
        <div class="vision-container">
            <div class="vision-content">
                <div class="vision-image">
                    <img src="{{ asset('image/vision.jpg') }}" alt="Visi SILAHKAN Icon">
                </div>

                <div class="vision-text">
                    <h2>Visi <span class="highlight">SILAHKAN</span></h2>

                    <p>
                        Menjadi pelopor gerakan ekonomi sirkular yang berkelanjutan di Indonesia
                        melalui pengelolaan limbah kain yang ramah lingkungan, kreatif, dan berdampak
                        sosial.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- section misi -->
    <section class="silahkan-mission" id="misi-silahkan">
        <div class="mission-container">
            <div class="mission-title">
                <h2>Misi <span class="highlight">SILAHKAN</span></h2>
            </div>

            <div class="mission-content">
                <div class="mission-list">
                    <ul>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            Mengumpulkan dan mengelola limbah kain dari rumah tangga secara terstruktur dan berkelanjutan.
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            Mendorong masyarakat untuk berpartisipasi aktif dalam program daur ulang tekstil.
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            Mengembangkan inovasi produk dari hasil olahan limbah kain sebagai solusi ekonomi kreatif.
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            Melakukan edukasi dan sosialisasi tentang gaya hidup berkelanjutan dan konsumsi bertanggung jawab.
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            Berkolaborasi dengan pemerintah, komunitas, dan pelaku industri dalam mewujudkan lingkungan bebas limbah tekstil.
                        </li>
                    </ul>
                </div>

                <div class="mission-gallery">
                    <div class="gallery-top">
                        <div class="image-wrapper mission-1">
                            <img src="{{ asset('image/misi-1.png') }}" alt="MISSION Text" class="small-image">
                        </div>
                        <div class="image-wrapper mission-2">
                            <img src="{{ asset('image/misi-2.png') }}" alt="Group Discussion" class="large-image">
                        </div>
                    </div>

                    <div class="gallery-bottom">
                        <div class="image-wrapper mission-3">
                            <img src="{{ asset('image/misi-4.png') }}" alt="Handshake on Laptop" class="small-image">
                        </div>
                        <div class="image-wrapper mission-4">
                            <img src="{{ asset('image/misi-3.png') }}" alt="Circle Discussion" class="large-image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- sectiaon program unggulan-->
    <section class="silahkan-program" id="program-unggulan">
        <div class="program-container">
            <div class="program-header">
                <h2>Program Unggulan / <span class="highlight">Kolaborasi</span></h2>
                <p>Mewujudkan Circular Economy Melalui Kemitraan dan Kreativitas</p>
            </div>

            <div class="program-cards">

                <div class="program-card">
                    <div class="card-image">
                        <img src="{{ asset('image/program-1.png') }}" alt="Kemitraan Pengangkutan Limbah">
                    </div>
                    <div class="card-content">
                        <h3>Kemitraan Pengangkutan Limbah</h3>
                        <p>
                            Bekerja sama dengan mitra logistik dan komunitas lokal untuk menjemput, menyortir, dan mendistribusikan limbah kain secara efisien dan ramah lingkungan.
                        </p>
                        <a href="#" class="btn-gabung">Gabung Sekarang</a>
                    </div>
                </div>

                <div class="program-card">
                    <div class="card-image">
                        <img src="{{ asset('image/program-2.png') }}" alt="Donasi Kain Layak Pakai">
                    </div>
                    <div class="card-content">
                        <h3>Donasi Kain Layak Pakai</h3>
                        <p>
                            Menyalurkan pakaian dan kain yang masih bisa digunakan kepada rumah singgah dan komunitas prasejahtera, mengubah sisa jadi berkah.
                        </p>
                        <a href="#" class="btn-gabung">Donasi Sekarang</a>
                    </div>
                </div>

                <div class="program-card">
                    <div class="card-image">
                        <img src="{{ asset('image/program-3.png') }}" alt="Kolaborasi Dengan UMKM Daur Ulang">
                    </div>
                    <div class="card-content">
                        <h3>Kolaborasi Dengan UMKM Daur Ulang</h3>
                        <p>
                            Bermitra dengan pelaku UMKM kreatif yang mengubah limbah kain menjadi produk bernilai seperti tas, keset, atau dekorasi rumah.
                        </p>
                        <a href="#" class="btn-gabung">Gabung Sekarang</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- sectiaon edukasi-->
    <section class="silahkan-edukasi" id="edukasi-sosialisasi">
        <div class="edukasi-container">
            <div class="edukasi-header">
                <h2>Edukasi & <span class="highlight">Sosialisasi</span></h2>
                <p>Perubahan Besar Dimulai Dari Tindakan Kecil di Rumah Anda.</p>
            </div>

            <div class="edukasi-list">

                <div class="edukasi-item item-left-image">
                    <div class="item-image">
                        <img src="{{ asset('image/edukasi-1.png') }}" alt="Pilah Kain di Rumah">
                    </div>
                    <div class="item-content">
                        <h3 class="item-title">Pilah Kain di Rumah</h3>
                        <p class="item-description">
                            Langkah awal yang sederhana namun penting. Kami mengajarkan masyarakat cara memilah kain layak pakai, kain perca, dan kain tidak terpakai agar bisa diproses sesuai kebutuhan daur ulang.
                        </p>
                    </div>
                </div>

                <div class="edukasi-item item-right-image">
                    <div class="item-image">
                        <img src="{{ asset('image/edukasi-2.png') }}" alt="Workshop Daur Ulang Kreatif">
                    </div>
                    <div class="item-content">
                        <h3 class="item-title">Daur Ulang Kreatif</h3>
                        <p class="item-description">
                            Kami mengadakan workshop daur ulang untuk mengubah limbah kain menjadi produk baru: tas, dompet, boneka, atau bahan kerajinan lainnya.
                        </p>
                    </div>
                </div>

                <div class="edukasi-item item-left-image">
                    <div class="item-image">
                        <img src="{{ asset('image/edukasi-3.png') }}" alt="Kurangi Dampak Lingkungan">
                    </div>
                    <div class="item-content">
                        <h3 class="item-title">Kurangi Dampak Lingkungan</h3>
                        <p class="item-description">
                            Melalui edukasi di sekolah dan komunitas, kami menjelaskan dampak limbah tekstil terhadap bumi dan bagaimana tindakan kecil seperti daur ulang bisa mengurangi emisi karbon serta limbah di TPA.
                        </p>
                    </div>
                </div>

                <div class="edukasi-item item-right-image">
                    <div class="item-image">
                        <img src="{{ asset('image/edukasi-4.png') }}" alt="Contoh Produk Daur Ulang Kreatif">
                    </div>
                    <div class="item-content">
                        <h3 class="item-title">Daur Ulang Kreatif</h3>
                        <p class="item-description">
                            Kami mengajak masyarakat, UMKM, dan relawan untuk berkolaborasi menciptakan rantai ekonomi berkelanjutan. Setiap kain yang dikumpulkan menjadi sumber penghasilan baru bagi pengrajin lokal dan pelaku usaha hijau.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- sectiaon kontribusi-->
    <section class="silahkan-kontribusi" id="kontribusi">
        <div class="kontribusi-container">
            <div class="kontribusi-header">
                <h2>Kontribusi Kami Terhadap <span class="highlight">Lingkungan</span></h2>
                <p>Setiap kilogram kain yang disumbangkan menjadi langkah kecil</p>
            </div>

            <div class="kontribusi-cards">

                <div class="kontribusi-card">
                    <div class="card-image">
                        <img src="{{ asset('image/kontribusi-1.png') }}" alt="Mengurangi Sampah Tekstil">
                    </div>
                    <div class="card-content">
                        <h3>Mengurangi Sampah Tekstil</h3>
                    </div>
                </div>

                <div class="kontribusi-card">
                    <div class="card-image">
                        <img src="{{ asset('image/kontribusi-2.png') }}" alt="Menciptakan Peluang Bagi UMKM">
                    </div>
                    <div class="card-content">
                        <h3>Menciptakan Peluang Bagi UMKM</h3>
                    </div>
                </div>

                <div class="kontribusi-card">
                    <div class="card-image">
                        <img src="{{ asset('image/kontribusi-3.png') }}" alt="Mendorong Gaya Hidup Hijau">
                    </div>
                    <div class="card-content">
                        <h3>Mendorong Gaya Hidup Hijau</h3>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Include Footer Component -->
    @include('components.footer')

</body>
</html>
