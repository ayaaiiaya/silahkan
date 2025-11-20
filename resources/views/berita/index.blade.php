<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Berita - SILAHKAN</title>
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/berita.css') }}">
</head>
<body>
    @include('components.navbar')

    @php
        $collageImages = ['kolase1.jpg','kolase2.jpg','kolase3.jpg','kolase4.jpg'];
    @endphp

    <main class="container">
        <section class="collage">
            <div class="collage-grid">
                <img class="img1" src="{{ asset('image/'.$collageImages[0]) }}" alt="kolase 1">
                <img class="img2" src="{{ asset('image/'.$collageImages[1]) }}" alt="kolase 2">
                <img class="img3" src="{{ asset('image/'.$collageImages[2]) }}" alt="kolase 3">
                <img class="img4" src="{{ asset('image/'.$collageImages[3]) }}" alt="kolase 4">
            </div>

            <div class="collage-text">
                <h2>Kabar Terbaru SILAHKAN</h2>
                <p>Ikuti berbagai kegiatan, inovasi, dan cerita inspiratif seputar pengelolaan limbah kain.</p>

                @if(session()->has('admin_id'))
                    <div class="admin-actions">
                        <a href="{{ route('admin.berita.create') }}" class="primary-btn">Tambah berita</a>
                        <a href="{{ route('admin.berita.index') }}" class="ghost-btn">Kelola berita</a>
                    </div>
                @endif
            </div>
        </section>

        <section class="list-berita">
            <div class="list-header">
                <h2>Daftar Berita</h2>
                @if(session()->has('admin_id'))
                    <a class="primary-btn small" href="{{ route('admin.berita.create') }}">Tambah berita</a>
                @endif
            </div>

            @if($beritas->isEmpty())
                <div class="empty-state">
                    <p>Belum ada berita yang ditambahkan. Silakan kembali lagi nanti.</p>
                </div>
            @else
                <div class="berita-grid">
                    @foreach($beritas as $berita)
                        <article class="berita-card">
                            <div class="berita-image">
                                @php
                                    $imgPath = $berita->image 
                                        ? $berita->image 
                                        : (file_exists(public_path('image/berita1.jpg')) ? 'image/berita1.jpg' : 'image/image.png');
                                @endphp
                                <img src="{{ asset($imgPath) }}" alt="{{ $berita->title }}">
                            </div>
                            <div class="berita-body">
                                <h3>{{ $berita->title }}</h3>
                                <p class="excerpt">{{ $berita->excerpt ?? \Illuminate\Support\Str::limit(strip_tags($berita->content), 120) }}</p>
                                <a href="{{ route('berita.show', $berita->id) }}" class="read-more">Baca Selengkapnya ➜</a>
                            </div>
                        </article>
                    @endforeach
                </div>
            @endif
        </section>
    </main>

    @include('components.footer')
</body>
</html>
