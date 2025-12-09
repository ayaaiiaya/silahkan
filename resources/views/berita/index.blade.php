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

    <main class="container">
        @if(!$beritas->isEmpty())
            @php
                $highlightBerita = $beritas->first();
                $highlightImg = $highlightBerita->image 
                    ? $highlightBerita->image 
                    : (file_exists(public_path('image/berita1.jpg')) ? 'image/berita1.jpg' : 'image/image.png');
            @endphp
            
            <section class="highlight-berita">
                <div class="highlight-content">
                    <div class="highlight-text">
                        <span class="highlight-badge">Berita Utama</span>
                        <h1>{{ $highlightBerita->title }}</h1>
                        <p class="highlight-excerpt">
                            {{ $highlightBerita->excerpt ?? \Illuminate\Support\Str::limit(strip_tags($highlightBerita->content), 200) }}
                        </p>
                        <div class="highlight-meta">
                            <span class="date">
                                📅 {{ $highlightBerita->created_at->format('d F Y') }}
                            </span>
                            @if($highlightBerita->category)
                                <span class="category">
                                    #{{ $highlightBerita->category }}
                                </span>
                            @endif
                        </div>
                        <a href="{{ route('berita.show', $highlightBerita->id) }}" class="primary-btn">
                            Baca Selengkapnya
                        </a>
                        
                        @if(session()->has('admin_id'))
                            <div class="admin-actions">
                                <a href="{{ route('admin.berita.edit', $highlightBerita->id) }}" class="edit-btn">
                                    ✏️ Edit Berita Utama
                                </a>
                            </div>
                        @endif
                    </div>
                    
                    <div class="highlight-image">
                        <img src="{{ asset($highlightImg) }}" alt="{{ $highlightBerita->title }}">
                        <div class="image-overlay"></div>
                    </div>
                </div>
            </section>
        @endif

        <section class="list-berita">
            <div class="list-header">
                <h2>Daftar Berita</h2>
                @if(session()->has('admin_id'))
                    <div class="admin-header-actions">
                        <a class="primary-btn small" href="{{ route('admin.berita.create') }}">
                            ➕ Tambah berita
                        </a>
                        <a class="ghost-btn small" href="{{ route('admin.berita.index') }}">
                            ⚙️ Kelola berita
                        </a>
                    </div>
                @endif
            </div>

            @if($beritas->isEmpty())
                <div class="empty-state">
                    <div class="empty-icon">📰</div>
                    <h3>Belum ada berita</h3>
                    <p>Silakan tambahkan berita pertama Anda.</p>
                    @if(session()->has('admin_id'))
                        <a href="{{ route('admin.berita.create') }}" class="primary-btn">
                            Tambah Berita Pertama
                        </a>
                    @endif
                </div>
            @else
                <div class="berita-grid">
                    @foreach($beritas as $index => $berita)
                        @if($index > 0) {{-- Skip first item karena sudah jadi highlight --}}
                            <article class="berita-card {{ $index <= 3 ? 'featured' : '' }}">
                                <div class="berita-image">
                                    @php
                                        $imgPath = $berita->image 
                                            ? $berita->image 
                                            : (file_exists(public_path('image/berita1.jpg')) ? 'image/berita1.jpg' : 'image/image.png');
                                    @endphp
                                    <img src="{{ asset($imgPath) }}" alt="{{ $berita->title }}">
                                    @if($index <= 2)
                                        <span class="featured-badge">Hot</span>
                                    @endif
                                </div>
                                <div class="berita-body">
                                    <div class="berita-meta">
                                        <span class="date">
                                            {{ $berita->created_at->format('d M Y') }}
                                        </span>
                                        @if($berita->category)
                                            <span class="category">
                                                {{ $berita->category }}
                                            </span>
                                        @endif
                                    </div>
                                    <h3>{{ $berita->title }}</h3>
                                    <p class="excerpt">
                                        {{ $berita->excerpt ?? \Illuminate\Support\Str::limit(strip_tags($berita->content), 100) }}
                                    </p>
                                    <a href="{{ route('berita.show', $berita->id) }}" class="read-more">
                                        Baca Selengkapnya ➜
                                    </a>
                                </div>
                            </article>
                        @endif
                    @endforeach
                </div>
                
                @if($beritas->count() > 10)
                    <div class="load-more">
                        <button class="ghost-btn">Muat Lebih Banyak</button>
                    </div>
                @endif
            @endif
        </section>
    </main>

    @include('components.footer')
</body>
</html>