<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SILAHKAN | Sistem Informasi Limbah Kain</title>
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/home.css') }}" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700;800&display=swap" rel="stylesheet">
</head>
<body>

    <!-- Include Navbar Component -->
    @include('components.navbar')

    <!-- ===== HERO SECTION ===== -->
    <section class="hero">
        <div class="hero-content">
            <h1 class="welcome-text">SELAMAT DATANG</h1>
            <h2 class="app-name">di SILAHKAN</h2>
            <p>Sistem Informasi Pengelolaan Limbah Kain</p>
        </div>

        <div class="hero-image">
            <img src="{{ asset('image/recycle.png') }}" alt="Limbah Kain" />
        </div>
    </section>

    <!-- ===== ABOUT ===== -->
    <section class="about" id="tentang">
        <div class="about-container">
            <div class="about-images">
                <img src="{{ asset('image/limbah1.jpeg') }}" alt="limbah kain 1">
                <img src="{{ asset('image/limbah2.jpg') }}" alt="limbah kain 2">
                <img src="{{ asset('image/limbah3.jpg') }}" alt="limbah kain 3">
                <img src="{{ asset('image/limbah4.jpg') }}" alt="limbah kain 4">
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
                    <img src="{{ asset('image/basket.png') }}" alt="Pilah Kainmu">
                    <h3>🧺 Pilah Kainmu</h3>
                    <p>Pisahkan kain yang masih bisa digunakan dan siap didaur ulang.</p>
                </div>

                <div class="step-card">
                    <img src="{{ asset('image/sewing.png') }}" alt="Daur Ulang dan Kreasi">
                    <h3>🧵 Daur Ulang & Kreasi</h3>
                    <p>Ubah sisa kain jadi karya bernilai bersama mitra UMKM.</p>
                </div>

                <div class="step-card">
                    <img src="{{ asset('image/hand.png') }}" alt="Sebarkan Kesadaran">
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
            @foreach (range(1,9) as $i)
            <div class="review-card">
                <p class="review-text">"SILAHKAN benar-benar membuat saya sadar bahwa limbah kain rumah tangga bisa diolah lagi."</p>
                <div class="review-user">
                    <img src="{{ asset('image/karina.jpg') }}" alt="User">
                    <div>
                        <h4>Karin</h4>
                        <span>Ibu Rumah Tangga</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <!-- Include Footer Component -->
    @include('components.footer')

    <!-- ===== COUNTER SCRIPT ===== -->
    <script>
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
            if (section) {
                const sectionTop = section.getBoundingClientRect().top;
                if (sectionTop < window.innerHeight && !started) {
                    started = true;
                    startCounting();
                }
            }
        });
    </script>

</body>
</html>