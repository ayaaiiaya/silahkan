<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Umkm | SILAHKAN</title>
    <!-- di head -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="{{ asset('css/umkm.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <script src="{{ asset('js/notif.js') }}"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700;800&display=swap" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    @include('components.navbar')
    
    <!-- ===== Join Section ===== -->
    <section class="join-section">
        <div class="join-container">
            <div class="text-content">
                <h1>Mengubah Limbah Jadi Nilai
                    Bersama UMKM Lokal</h1>
                <p class="subtitle">Bergabunglah dalam gerakan ekonomi sirkular dengan 
                    mengolah limbah kain rumah tangga menjadi produk 
                    bernilai guna.</p>
                <div class="card-button-form">
                    <button class="btn-gabung">Gabung Sekarang</button>
                    <button class="btn-mitra">Hubungi Via Whatsapp</button>
                </div>
            </div>
            <div class="image">
                <img src="{{ asset('image/umkm.jpg') }}" alt="">
            </div>
        </div>
    </section>


    <!-- ===== Program Section ===== -->
    <section class="kontribusi">
        <div class="kontribusi-container">
            <h2>Bentuk Kolaborasi</h2>
            <p class="subtitle">
                Bersama, kita bisa mengubah limbah menjadi peluang. SILAHKAN membuka ruang kolaborasi bagi komunitas, pelaku usaha, dan lembaga sosial untuk menciptakan dampak 
                nyata melalui pengelolaan limbah kain yang berkelanjutan. Jadilah bagian dari gerakan ekonomi sirkular 
                mulai dari ide, aksi, hingga kreasi bersama.

            <div class="kontribusi-grid">
                <div class="kontribusi-card">
                    <img src="image/regis.png" alt="Pilah Kainmu">
                    <h3>Registrasi & Seleksi</h3>
                    <p>Daftarkan profil UMKM-mu dan komitmen keberlanjutan untuk olah limbah kain bernilai.</p>
                </div>

                <div class="kontribusi-card">
                    <img src="image/sewing-gurl.png" alt="Daur Ulang dan Kreasi">
                    <h3>Produksi & Pelatihan</h3>
                    <p>Kami bantu kembangkan 
                        ide produk dari limbah kain 
                        dengan pendampingan dan
                        pelatihan kreatif.</p>
                </div>

                <div class="kontribusi-card">
                    <img src="image/package.png" alt="Sebarkan Kesadaran">
                    <h3>Distribusi & Promosi</h3>
                    <p>Produk hasil kolaborasi 
                        akan dipromosikan melalui 
                        platform SILAHKAN dan 
                        jaringan mitra kami.</p>
                </div>
            </div>
        </div>
    </section>

    

    <!-- ===== POPUP FORM MITRA ===== -->
    <div class="popup-overlay" id="popupForm">
        <div class="popup-content wide">
            <span class="close-btn" id="closePopup">&times;</span>

            <h2>Formulir Pendaftaran UMKM</h2>
            <p class="popup-desc">
            Mari berkolaborasi untuk menciptakan dampak nyata bagi lingkungan. <br>Isi formulir berikut untuk mengajukan kerja sama atau ide kolaborasi bersama SILAHKAN.
            </p>

            <form id="mitraForm" method="POST" action="{{ route('umkm.store') }}">
            @csrf
            <div class="form-grid">
                <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="nama_lengkap" placeholder="Masukkan nama Anda" required>
                </div>

                <div class="form-group">
                <label>Nomor HP</label>
                <input type="text" name="no_handphone" placeholder="08xxxxxxxxxx" required>
                </div>

                <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" placeholder="Masukkan email aktif" required>
                </div>

                <div class="form-group">
                <label>Alamat</label>
                <textarea name="alamat" rows="1" placeholder="Tuliskan Alamat ..." required></textarea>
                </div>

                <div class="form-group">
                <label>Nama UMKM</label>
                <input type="text" name="nama_umkm" placeholder="Masukkan nama umkm" required>
                </div>

                <div class="form-group">
                <label>Skala Usaha</label>
                <select name="skala_usaha" required>
                    <option value="">Pilih Skala Usaha</option>
                    <option value="mikro">Mikro</option>
                    <option value="kecil">Kecil</option>
                    <option value="menengah">Menengah</option>
                </select>
                </div>

                <div class="form-group">
                <label>Jenis Kolaborasi</label>
                <select name="jenis_kolaborasi" required>
                    <option value="">Pilih Jenis Kolaborasi</option>
                    <option value="edukasi_sosialiAsasi">Edukasi & Sosialisasi</option>
                    <option value="produksi_recycle">Produksi dan Daur Ulang</option>
                    <option value="event">Event / Kampanye Lingkungan</option>
                    <option value="pendampingan_umkm">Pendampingan UMKM</option>
                    <option value="lainnya">Lainnya</option>
                </select>
                </div>

               <div class="form-group">
                <label>deskripsi</label>
                <textarea name="deskripsi" rows="1" placeholder="Tuliskan Deskripsi ..." required></textarea>
                </div>

                <div class="form-group">
                <label>Lokasi</label>
                <input type="text" name="lokasi" placeholder="Masukkan Lokasi Cakupan" required>
                </div>

                <div class="form-group full">
                    <label class="checkbox-label">
                        <input type="checkbox" name="setuju_syarat" id="agree" required />
                        Saya bersedia mengikuti ketentuan dan standar 
                        operasional SILAHKAN dalam proses pengumpulan 
                        dan penyaluran limbah kain.
                    </label>
                </div>
            </div>

          <button type="submit" class="submit-btn" id="submitBtn" disabled>Kirim Formulir</button>
            </form>
        </div>
    </div>

    @include('components.footer')

    <!-- ===== SCRIPT ===== -->
    <script>
        const openBtn = document.querySelector('.btn-gabung'); 
        const popup = document.getElementById('popupForm');
        const closeBtn = document.getElementById('closePopup');
        const agreeCheckbox = document.getElementById('agree');
        const submitBtn = document.getElementById('submitBtn');

        openBtn.addEventListener('click', () => popup.classList.add('active'));
        closeBtn.addEventListener('click', () => popup.classList.remove('active'));
        window.addEventListener('click', e => { if(e.target === popup) popup.classList.remove('active'); });

        agreeCheckbox.addEventListener('change', () => {
            submitBtn.disabled = !agreeCheckbox.checked;
        });
    </script>

    <script>
        document.querySelector('.btn-mitra').addEventListener('click', function() {
            window.open('https://wa.me/6287884462644?text=Halo%2C%20saya%20tertarik%20dengan%20program%20UMKM%20Anda!', '_blank');
        });
    </script>
</body>
</html>
