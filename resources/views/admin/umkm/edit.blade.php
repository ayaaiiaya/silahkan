@extends('components.layout')

@section('title', 'Form Edit Petugas')
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
        <a href="{{ route('admin.umkm.index') }}" class="text-primary">Data UMKM</a>
        <a href="#" class="text-grey"></a>
        <a href="#" class="text-grey"> / Form Edit Data UMKM</a>
@endsection

@section('content')

        <div class="row">
            <div class="col-lg-8 col-md-10 col-12 mx-auto">
                <div class="card">
                    <div class="card-header">
                        Form Edit Data UMKM
                    </div>
                    <div class="card-body">
                    <form action="{{ route('admin.umkm.update', $umkm->id) }}" method="post">
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            {{-- Kolom kiri --}}
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="nama_lengkap">Nama Lengkap</label>
                                    <input type="text" value="{{ $umkm->nama_lengkap }}" name="nama_lengkap" id="nama_lengkap" class="form-control" disabled>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="email">Email</label>
                                    <input type="text" value="{{ $umkm->email }}" name="email" id="email" class="form-control" disabled>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="no_handphone">No Handphone</label>
                                    <input type="text" value="{{ $umkm->no_handphone }}" name="no_handphone" id="no_handphone" class="form-control" disabled>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="jenis_kolaborasi">Jenis Kolaborasi</label>
                                    <select name="jenis_kolaborasi" id="jenis_kolaborasi" class="form-control">
                                        <option value="edukasi_sosialiAsasi" {{ $umkm->jenis_kolaborasi == 'edukasi_sosialiasasi' ? 'selected' : '' }}>Edukasi & Sosialisasi</option>
                                        <option value="produksi_recycle" {{ $umkm->jenis_kolaborasi == 'produksi_recycle' ? 'selected' : '' }}>Produksi dan Daur Ulang</option>
                                        <option value="event" {{ $umkm->jenis_kolaborasi == 'event' ? 'selected' : '' }}>Event / Kampanye Lingkungan</option>
                                        <option value="pendampingan_umkm" {{ $umkm->jenis_kolaborasi == 'pendampingan_umkm' ? 'selected' : '' }}>Pendampingan UMKM</option>
                                        <option value="lainnya" {{ $umkm->jenis_kolaborasi == 'lainnya' ? 'selected' : '' }}>Lainnya</option>
                                    </select>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="lokasi">Lokasi Cakupan</label>
                                    <input type="text" value="{{ $umkm->lokasi }}" name="lokasi" id="lokasi" class="form-control" disabled>
                                </div>

                            </div>

                            {{-- Kolom kanan --}}
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" value="{{ $umkm->alamat }}" name="alamat" id="alamat" class="form-control" disabled>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="nama_umkm">Nama UMKM</label>
                                    <input type="text" value="{{ $umkm->nama_umkm }}" name="nama_umkm" id="nama_umkm" class="form-control" disabled>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="skala_prioritas">Skala Prioritas</label>
                                    <select name="skala_prioritas" id="skala_prioritas" class="form-control">
                                        <option value="mikro" {{ $umkm->skala_prioritas == 'mikro' ? 'selected' : '' }}>Mikro</option>
                                        <option value="kecil" {{ $umkm->skala_prioritas == 'kecil' ? 'selected' : '' }}>Kecil</option>
                                        <option value="menengah" {{ $umkm->skala_prioritas == 'menengah' ? 'selected' : '' }}>Menengah</option>
                                    </select>
                                </div>
                                
                                <div class="form-group mb-3">
                                    <label for="deskripsi">Deskripsi</label>
                                    <input type="text" value="{{ $umkm->deskripsi }}" name="deskripsi" id="deskripsi" class="form-control" disabled>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="status">Status</label>
                                    <select name="status" id="status" class="form-control">
                                        <option value="menunggu" {{ $umkm->status == 'menunggu' ? 'selected' : '' }}>Menunggu</option>
                                        <option value="diterima" {{ $umkm->status == 'diterima' ? 'selected' : '' }}>Disetujui</option>
                                        <option value="ditolak" {{ $umkm->status == 'ditolak' ? 'selected' : '' }}>Ditolak</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                        <button type="submit" class="btn btn-warning text-white w-100">UPDATE</button>
                    </form>
                    <!-- Form DELETE -->
                    <form action="{{ route('admin.umkm.delete', $umkm->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger w-100">HAPUS</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>

        <script>
            document.querySelectorAll('.delete-form').forEach(form => {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    Swal.fire({
                        title: 'Yakin ingin menghapus?',
                        text: "Data ini akan dihapus permanen!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#3085d6',
                        confirmButtonText: 'Ya, hapus!',
                        cancelButtonText: 'Batal'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form.submit(); // submit form jika dikonfirmasi
                        }
                    });
                });
            });
        </script>

      @endsection