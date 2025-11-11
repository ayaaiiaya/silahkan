@extends('components.layout')

@section('title', 'Form Edit Data Donasi')
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
        <a href="{{ route('admin.donasi.index') }}" class="text-primary">Data Donasi</a>
        <a href="#" class="text-grey"></a>
        <a href="#" class="text-grey"> / Form Edit Data Donasi</a>
@endsection

@section('content')

        <div class="row">
            <div class="col-lg-8 col-md-10 col-12 mx-auto">
                <div class="card">
                    <div class="card-header">
                        Form Edit Data Donasi
                    </div>
                    <div class="card-body">
                    <form action="{{ route('admin.donasi.update', $donasi->id) }}" method="post">
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            {{-- Kolom kiri --}}
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="nama_lengkap">Nama Lengkap</label>
                                    <input type="text" value="{{ $donasi->nama_lengkap }}" name="nama_lengkap" id="nama_lengkap" class="form-control" disabled>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="email">Email</label>
                                    <input type="text" value="{{ $donasi->email }}" name="email" id="email" class="form-control" disabled>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="jenis_donasi">Jenis Donasi</label>
                                    <select name="jenis_donasi" id="jenis_donasi" class="form-control">
                                        <option value="kain_perca" {{ $donasi->jenis_donasi == 'kain_perca' ? 'selected' : '' }}>Kain Perca</option>
                                        <option value="pakaian_layak" {{ $donasi->jenis_donasi == 'pakaian_layak' ? 'selected' : '' }}>Pakaian Layak Pakai</option>
                                        <option value="bahan_tekstil" {{ $donasi->jenis_donasi == 'bahan_tekstil' ? 'selected' : '' }}>Bahan Tekstil Lain</option>
                                        <option value="campuran" {{ $donasi->jenis_donasi == 'campuran' ? 'selected' : '' }}>Campuran</option>
                                    </select>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="keterangan">Keterangan</label>
                                    <textarea name="keterangan" id="keterangan" class="form-control" rows="4" disabled>{{ $donasi->keterangan }}</textarea>
                                </div>
                            </div>

                            {{-- Kolom kanan --}}
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="alamat">Alamat</label>
                                    <textarea name="alamat" id="alamat" class="form-control" rows="4" disabled>{{ $donasi->alamat }}</textarea>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="no_handphone">No Handphone</label>
                                    <input type="text" value="{{ $donasi->no_handphone }}" name="no_handphone" id="no_handphone" class="form-control" disabled>
                                </div>
                                
                                <div class="form-group mb-3">
                                    <label for="cara_donasi">Cara Donasi</label>
                                    <select name="cara_donasi" id="cara_donasi" class="form-control">
                                        <option value="diantar" {{ $donasi->cara_donasi == 'diantar' ? 'selected' : '' }}>Diantar Langsung ke Titik Pengumpulan</option>
                                        <option value="dijemput" {{ $donasi->cara_donasi == 'dijemput' ? 'selected' : '' }}>Dijemput Oleh Mitra Penjemputan</option>
                                    </select>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="status">Status</label>
                                    <select name="status" id="status" class="form-control">
                                        <option value="menunggu" {{ $donasi->status == 'menunggu' ? 'selected' : '' }}>Menunggu</option>
                                        <option value="disetujui" {{ $donasi->status == 'disetujui' ? 'selected' : '' }}>Disetujui</option>
                                        <option value="ditolak" {{ $donasi->status == 'ditolak' ? 'selected' : '' }}>Ditolak</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                        <button type="submit" class="btn btn-warning text-white w-100">UPDATE</button>
                    </form>
                    <!-- Form DELETE -->
                    <form action="{{ route('admin.donasi.delete', $donasi->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger w-100">HAPUS</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
      @endsection