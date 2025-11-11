<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Donasi | SILAHKAN</title>
    <!-- di head -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="{{ asset('css/donasi.css') }}">
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
                <h1>Ubah Limbah Kain <br>Jadi Kebaikan</h1>
                <p class="subtitle">Donasikan kain tak terpakai agar bisa dimanfaatkan 
                <br>kembali oleh pengrajin dan UMKM daur ulang lebih hijau dan berdaya guna.</p>
                <div class="card-button-form">
                    <button class="btn-gabung">Gabung Sekarang</button>
                    <button class="btn-mitra">Hubungi Via Whatsapp</button>
                </div>
            </div>
            <div class="image">
                <img src="{{ asset('image/donasi1.jpg') }}" alt="">
            </div>
        </div>
    </section>

    <!-- ===== Program Section ===== -->
    <section class="kontribusi">
        <div class="kontribusi-container">
            <h2>Cara Donasi</h2>
            <p class="subtitle">
                Mau berdonasi tapi bingung mulai dari mana? <br>Tenang, cukup ikuti tiga langkah mudah ini untuk mengubah kain bekasmu jadi manfaat nyata!
            </p>

            <div class="kontribusi-grid">
                <div class="kontribusi-card">
                    <img src="image/kumpulkan.png" alt="Pilah Kainmu">
                    <h3>Kumpulkan</h3>
                    <p>Pilah kain atau pakaian 
                        yang masih layak pakai 
                        di rumahmu.</p>
                </div>

                <div class="kontribusi-card">
                    <img src="image/jemput.png" alt="Daur Ulang dan Kreasi">
                    <h3>Jemput</h3>
                    <p>Antarkan ke titik 
                        pengumpulan atau 
                        jadwalkan penjemputan 
                        oleh mitra kami.</p>
                </div>

                <div class="kontribusi-card">
                    <img src="image/salurkan.png" alt="Sebarkan Kesadaran">
                    <h3>Salurkan</h3>
                    <p>Antarkan ke titik 
                        pengumpulan atau 
                        jadwalkan penjemputan 
                        oleh mitra kami.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== POPUP FORM MITRA ===== -->
    <div class="popup-overlay" id="popupForm">
        <div class="popup-content wide">
            <span class="close-btn" id="closePopup">&times;</span>

            <h2>Formulir Pendaftaran Mitra</h2>
            <p class="popup-desc">
            Tertarik menjadi bagian dari program penyaluran limbah?<br>
            Daftar sebagai mitra dan berkontribusi dalam pengelolaan limbah berkelanjutan.
            </p>

            <form id="mitraForm" method="POST" action="{{ route('donasi.store') }}">
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
                <label>Alamat</label>
                <textarea name="alamat" rows="1" placeholder="Tuliskan Alamat ..." required></textarea>
                </div>

                <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" placeholder="Masukkan email aktif" required>
                </div>

                <div class="form-group">
                <label>Jenis Donasi</label>
                <select name="jenis_donasi" required>
                    <option value="">Pilih Jenis Donasi</option>
                    <option value="kain_perca">Kain Perca</option>
                    <option value="pakaian_layak">Pakaian Layak Pakai</option>
                    <option value="bahan_tekstil">Bahan Tekstil Lain</option>
                    <option value="campuran">Campuran</option>
                </select>
                </div>

                <div class="form-group">
                <label>Cara Penyaluran Donasi</label>
                <select name="cara_donasi" required>
                    <option value="">Pilih Cara Penyaluran Donasi</option>
                    <option value="diantar">Diantar langsung ke titik pengumpulan</option>
                    <option value="dijemput">Dijemput oleh mitra pengangkutan</option>
                </select>
                </div>

                <div class="form-group full">
                <label>Keterangan Tambahan</label>
                <textarea name="keterangan" rows="3" placeholder="Tuliskan detail tambahan..."></textarea>
                </div>
            </div>

          <button type="submit" class="submit-btn" id="submitBtn">Kirim Formulir</button>
            </form>
        </div>
    </div>

    @include('components.footer')

    <script>
    const openBtn = document.querySelector('.btn-gabung'); 
    const popup = document.getElementById('popupForm');
    const closeBtn = document.getElementById('closePopup');

    openBtn.addEventListener('click', () => popup.classList.add('active'));
    closeBtn.addEventListener('click', () => popup.classList.remove('active'));
    window.addEventListener('click', e => { 
        if (e.target === popup) popup.classList.remove('active'); 
    });
    </script>

    <script>
        document.querySelector('.btn-mitra').addEventListener('click', function() {
            window.open('https://wa.me/6287884462644?text=Halo%2C%20saya%20tertarik%20dengan%20program%20UMKM%20Anda!', '_blank');
        });
    </script>
    
</body>
</html>
