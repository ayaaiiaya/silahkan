@extends('components.layout')

@section('content')
<div class="admin-container">
    <h1>Edit Berita</h1>
    
    <form action="{{ route('admin.berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="form-group">
            <label for="title">Judul</label>
            <input type="text" id="title" name="title" value="{{ $berita->title }}" required>
            @error('title')<span class="error">{{ $message }}</span>@enderror
        </div>

        <div class="form-group">
            <label for="excerpt">Ringkasan</label>
            <textarea id="excerpt" name="excerpt" rows="3" required>{{ $berita->excerpt }}</textarea>
            @error('excerpt')<span class="error">{{ $message }}</span>@enderror
        </div>

        <div class="form-group">
            <label for="image">Gambar</label>
            <input type="file" id="image" name="image" accept="image/*">
            <small>Biarkan kosong jika tidak ingin mengubah gambar</small>
            @if($berita->image)
                <div class="current-image">
                    <img src="{{ asset($berita->image) }}" alt="{{ $berita->title }}" style="width: 150px; height: auto;">
                </div>
            @endif
            @error('image')<span class="error">{{ $message }}</span>@enderror
        </div>

        <div class="form-group">
            <label for="content">Konten</label>
            <textarea id="content" name="content" rows="10" required>{{ $berita->content }}</textarea>
            @error('content')<span class="error">{{ $message }}</span>@enderror
        </div>

        <div class="form-actions">
            <button type="submit" class="btn btn-primary">Update Berita</button>
            <a href="{{ route('admin.berita.index') }}" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>

<style>
    .admin-container {
        max-width: 800px;
        margin: 20px auto;
        padding: 20px;
        background: #f5f5f5;
        border-radius: 8px;
    }

    h1 {
        color: #616B37;
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        display: block;
        margin-bottom: 8px;
        font-weight: 600;
        color: #45270D;
    }

    input[type="text"],
    input[type="file"],
    textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-family: Poppins, sans-serif;
    }

    textarea {
        resize: vertical;
    }

    small {
        display: block;
        margin-top: 5px;
        color: #666;
    }

    .current-image {
        margin-top: 10px;
    }

    .error {
        color: #d32f2f;
        font-size: 0.875rem;
        margin-top: 5px;
        display: block;
    }

    .form-actions {
        display: flex;
        gap: 10px;
        margin-top: 30px;
    }

    .btn {
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-family: Poppins, sans-serif;
        font-weight: 600;
        text-decoration: none;
        display: inline-block;
    }

    .btn-primary {
        background-color: #616B37;
        color: white;
    }

    .btn-primary:hover {
        background-color: #45270D;
    }

    .btn-secondary {
        background-color: #ccc;
        color: #333;
    }

    .btn-secondary:hover {
        background-color: #aaa;
    }
</style>
@endsection
