@extends('components.layout')

@section('content')
<div class="admin-container">
    <h2>Buat Berita Baru</h2>

    @if($errors->any())
        <div class="alert alert-error">{{ $errors->first() }}</div>
    @endif

    <form action="{{ route('admin.berita.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>Judul</label>
        <input type="text" name="title" value="{{ old('title') }}" required>

        <label>Excerpt</label>
        <input type="text" name="excerpt" value="{{ old('excerpt') }}">

        <label>Gambar</label>
        <input type="file" name="image">

        <label>Konten</label>
        <textarea name="content" rows="8">{{ old('content') }}</textarea>

        <button class="btn">Simpan</button>
    </form>
</div>
@endsection
