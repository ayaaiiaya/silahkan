@extends('components.layout')

@section('content')
<div class="admin-container">
    <h2>Manajemen Berita</h2>
    <a href="{{ route('admin.berita.create') }}" class="btn">Buat Berita Baru</a>

    @if(session('success'))
        <div class="alert">{{ session('success') }}</div>
    @endif

    <table class="admin-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Thumbnail</th>
                <th>Judul</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($beritas as $b)
                <tr>
                    <td style="width:50px">{{ $b->id }}</td>
                    <td style="width:120px">
                        @if($b->image)
                            <img src="{{ asset($b->image) }}" style="width:100px;height:60px;object-fit:cover;border-radius:6px" alt="thumb">
                        @else
                            <div style="width:100px;height:60px;background:#f0f0f0;border-radius:6px"></div>
                        @endif
                    </td>
                    <td>{{ $b->title }}</td>
                    <td>{{ $b->created_at->format('d-m-Y') }}</td>
                    <td>
                        <a href="{{ route('berita.show', $b->id) }}" class="btn small" target="_blank">Lihat</a>
                        <a href="{{ route('admin.berita.edit', $b->id) }}" class="btn small">Edit</a>
                        <form action="{{ route('admin.berita.destroy', $b->id) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn small danger" onclick="return confirm('Hapus berita ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
