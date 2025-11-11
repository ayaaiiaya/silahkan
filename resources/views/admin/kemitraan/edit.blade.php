@extends('components.layout')

@section('title', 'Form Edit Data Kemitraan')
<link rel="icon" type="image/x-icon" href="image/logoR.png" />

@section('css')
<style>
    .card {
        width: 100%;
        max-width: 900px; /* batas maksimal lebar form */
        margin: 0 auto; /* biar ke tengah */
    }

    .card-body label {
        font-weight: 500;
        color: #444;
    }

    .card-body input[disabled] {
        background-color: #f8f9fa;
        cursor: not-allowed;
    }

    .btn-warning {
        background-color: #ffc107;
        border: none;
    }

    .btn-danger {
        border: none;
    }
</style>
@endsection

@section('header')
        <a href="{{ route('admin.kemitraan.index') }}" class="text-primary">Data Kemitraan</a>
        <a href="#" class="text-grey"></a>
        <a href="#" class="text-grey"> / Form Edit Data Kemitraan</a>
@endsection

@section('content')

        <div class="row">
            <div class="col-lg-8 col-md-10 col-12 mx-auto">
                <div class="card">
                    <div class="card-header">
                        Form Edit Data Donasi
                    </div>
                    <div class="card-body">
                    <form action="{{ route('admin.kemitraan.update', $kemitraan->id) }}" method="post">
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            {{-- Kolom kiri --}}
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="nama_lengkap">Nama Lengkap</label>
                                    <input type="text" value="{{ $kemitraan->nama_lengkap }}" name="nama_lengkap" id="nama_lengkap" class="form-control" disabled>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="email">Email</label>
                                    <input type="text" value="{{ $kemitraan->email }}" name="email" id="email" class="form-control" disabled>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="jenis_kemitraan">Jenis Kemitraan</label>
                                    <select name="jenis_kemitraan" id="jenis_kemitraan" class="form-control">
                                        <option value="penjemputan_individu" {{ $kemitraan->jenis_kemitraan == 'penjemputan_individu' ? 'selected' : '' }}>Individu</option>
                                        <option value="penjemputan_organisasi" {{ $kemitraan->jenis_kemitraan == 'penjemputan_organisasi' ? 'selected' : '' }}>Organisasi</option>
                                        <option value="penjemputan_bisnis_tekstil" {{ $kemitraan->jenis_kemitraan == 'penjemputan_bisnis_tekstil' ? 'selected' : '' }}>Bisnis Tekstil</option>
                                    </select>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="keterangan">Keterangan</label>
                                    <textarea name="keterangan" id="keterangan" class="form-control" rows="4" disabled>{{ $kemitraan->keterangan }}</textarea>
                                </div>
                            </div>

                            {{-- Kolom kanan --}}
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="alamat">Alamat</label>
                                    <textarea name="alamat" id="alamat" class="form-control" rows="4" disabled>{{ $kemitraan->alamat }}</textarea>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="no_handphone">No Handphone</label>
                                    <input type="text" value="{{ $kemitraan->no_handphone }}" name="no_handphone" id="no_handphone" class="form-control" disabled>
                                </div>
                                
                                <div class="form-group mb-3">
                                    <label for="armada">Ketersediaan Armada</label>
                                    <select name="armada" id="armada" class="form-control">
                                        <option value="memiliki_armada" {{ $kemitraan->armada == 'memiliki_armada' ? 'selected' : '' }}>Memiliki Armada</option>
                                        <option value="bekerja_sama" {{ $kemitraan->armada == 'bekerja_sama' ? 'selected' : '' }}>Bekerja Sama</option>
                                    </select>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="status">Status</label>
                                    <select name="status" id="status" class="form-control">
                                        <option value="menunggu" {{ $kemitraan->status == 'menunggu' ? 'selected' : '' }}>Menunggu</option>
                                        <option value="diterima" {{ $kemitraan->status == 'diterima' ? 'selected' : '' }}>Diterima</option>
                                        <option value="ditolak" {{ $kemitraan->status == 'ditolak' ? 'selected' : '' }}>Ditolak</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                        <button type="submit" class="btn btn-warning text-white w-100">UPDATE</button>
                    </form>
                    <!-- Form DELETE -->
                    <form action="{{ route('admin.kemitraan.delete', $kemitraan->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger w-100">HAPUS</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
      @endsection