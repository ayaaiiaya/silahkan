<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $berita->title }} - SILAHKAN</title>
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/berita.css') }}">
</head>
<body>
    @include('components.navbar')

    <main>
        <section class="berita-detail-hero berita-hero-{{ $berita->id }}">
            <div class="container">
                <a href="{{ route('berita.index') }}" class="back-link">← Kembali ke Daftar Berita</a>
                <h1>{{ $berita->title }}</h1>
                <div class="berita-detail-meta">
                    <span>{{ $berita->created_at->format('d M Y') }}</span>
                </div>
            </div>
        </section>

        <section class="berita-detail-content">
            <div class="container">
                @if($berita->image)
                    <img src="{{ asset($berita->image) }}" alt="{{ $berita->title }}" class="berita-featured-image">
                @endif

                <div class="berita-body">
                    {!! $berita->content !!}
                </div>

                <div class="berita-back-action">
                    <a href="{{ route('berita.index') }}" class="btn-back-list">Kembali ke Daftar Berita</a>
                </div>
            </div>
        </section>
    </main>

    @include('components.footer')
</body>
</html>
