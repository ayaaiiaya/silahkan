<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profil | SILAHKAN</title>
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/kontak.css') }}" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700;800&display=swap" rel="stylesheet">
</head>
<body>

    <!-- Include Navbar Component -->
    @include('components.navbar')


    <!-- section about silahkan -->
    <section class="contact">
    
        <div class="contact-form-container">
            <h2 class="form-title">Hubungi Kami</h2>
            
            <form class="contact-form" action="{{ route('kontak.submit') }}" method="POST">
                
                @csrf
                
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" name="nama" placeholder="Masukkan Nama Lengkap" required>
                </div>
                
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Masukkan Email Lengkap" required>
                </div>
                
                <div class="form-group">
                    <label for="handphone">No Handphone</label>
                    <input type="tel" id="handphone" name="handphone" placeholder="Masukkan No Handphone" required>
                </div>
                
                <div class="form-group">
                    <label for="pesan">Pesan</label>
                    <textarea id="pesan" name="pesan" rows="6" placeholder="Masukkan pesan Anda di sini"></textarea>
                </div>
                
                <button type="submit" class="kirim-button">Kirim</button>
            </form>
        </div>

        <div class="contact-info-container">
            <h2 class="info-title">Kontak Kami</h2>
            <p class="info-tagline">Jangan cuma scroll, ayo sapa kami! Setiap pesan dari Anda bisa jadi langkah nyata untuk bumi yang lebih hijau.</p>
            <p class="info-channel-text">Hubungi kami melalui kanal berikut:</p>
            
            <div class="contact-channels">
                <a href="https://silahkan.co.id" class="channel-link website">
                    <span class="icon website-icon"></span> silahkan.co.id
                </a>
                <a href="tel:+628123456789" class="channel-link phone">
                    <span class="icon phone-icon"></span> +62 812 3456 789
                </a>
            </div>
        </div>
    </section>

    <section class="map-section">
        <h2 class="map-title">Kantor Pusat</h2>
        <p class="map-address">Jl Raya Kalimalang No.8, RT08/RW01 Jakarta Timur</p>
        
        <div class="map-container">
            <!-- Menggunakan Iframe Google Maps untuk peta interaktif -->
            <!-- Catatan: Ganti latitude, longitude, dan zoom di bawah ini dengan lokasi kantor Anda -->
            <iframe 
                src="https://maps.google.com/maps?q=Jl%20Raya%20Kalimalang%20No.8%20Jakarta%20Timur&t=&z=16&ie=UTF8&iwloc=&output=embed" 
                frameborder="0" 
                style="border:0;" 
                allowfullscreen="" 
                aria-hidden="false" 
                tabindex="0">
            </iframe>
        </div>
    </section>


    @include('components.footer')

    <script>
        // ... kode JavaScript counter Anda
    </script>

</body>
</html>