<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>KEMITRAAN | SILAHKAN</title>
    <!-- di head -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="{{ asset('css/kemitraan.css') }}">
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
                <h1>Bergabung Jadi Mitra <br>Penjemputan</h1>
                <p class="subtitle">Bersama kita ciptakan rantai sirkular yang <br> lebih hijau dan berdaya guna.</p>
                <div class="card-button-form">
                    <button class="btn-gabung">Gabung Sekarang</button>
                    <button class="btn-mitra">Hubungi Via Whatsapp</button>
                </div>
            </div>
            <div class="image">
                <img src="{{ asset('image/bag-trash.jpg') }}" alt="">
            </div>
        </div>
    </section>

    <!-- ===== Program Section ===== -->
    <section class="program-section">
        <div class="program-container">
            <div class="program-image">
                <img src="{{ asset('image/jabat2.jpg') }}" alt="">
            </div>
            <div class="program-text">
                <h2>Program Kemitraan</h2>
                <p>
                    Bergabunglah dalam program kemitraan penjemputan 
                    limbah kain bersama SILAHKAN.Kami bekerja sama dengan individu maupun organisasi 
                    yang ingin berkontribusi dalam pengumpulan limbah kain 
                    dari berbagai wilayah, untuk disalurkan ke pusat
                    pengolahan kami.
                </p>
            </div>
        </div>
    </section>

    <!-- ===== Info Section ===== -->
    <section class="info-section">
        <div class="info-container">
            <div class="info-text">
                <h2>Info Program Kemitraan</h2>
                <p>
                    Program ini ditujukan bagi mitra yang memiliki 
                    armada atau akses transportasi, dan siap membantu 
                    proses penjemputan limbah dari rumah tangga, 
                    usaha kecil, atau komunitas. Mitra akan menjadi bagian penting dalam rantai 
                    pengelolaan limbah kain yang ramah lingkungan dan 
                    berkelanjutan.
                </p>
            </div>
            <div class="info-image">
                <img src="{{ asset('image/phone.jpg') }}" alt="">
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

            <form id="mitraForm" method="POST" action="{{ route('kemitraan.store') }}">
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
                        <textarea name="alamat" rows="3" placeholder="Tuliskan Alamat ..."></textarea>
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" placeholder="Masukkan email aktif" required>
                    </div>

                    <div class="form-group">
                        <label>Jenis Kemitraan</label>
                        <select name="jenis_kemitraan" required>
                            <option value="">Pilih jenis kemitraan</option>
                            <option value="penjemputan_individu">Individu</option>
                            <option value="penjemputan_organisasi">Organisasi</option>
                            <option value="penjemputan_bisnis_tekstil">Bisnis Tekstil</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Ketersediaan Armada</label>
                        <select name="armada" required>
                            <option value="">Pilih ketersediaan</option>
                            <option value="memiliki_kendaraan">Memiliki Kendaraan</option>
                            <option value="bekerja_sama">Bekerja Sama</option>
                        </select>
                    </div>

                    <div class="form-group full">
                        <label>Keterangan Tambahan</label>
                        <textarea name="keterangan" rows="3" placeholder="Tuliskan detail tambahan..."></textarea>
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

                <button type="submit" class="submit-btn" id="submitBtn" disabled>Kirim</button>
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
</body>
</html>
