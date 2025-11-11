@extends('components.layout')

@section('title', 'Data UMKM')
<link rel="icon" type="image/x-icon" href="{{ asset('image/logoR.png') }}" />

@section('header', 'Data UMKM')

@section('content')
    <div class="card shadow-sm p-4">
        <h5 class="mb-4 fw-bold">Daftar UMKM Terdaftar</h5>

        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Nama UMKM</th>
                        <th>Skala Usaha</th>
                        <th>Jenis Kolaborasi</th>
                        <th>Lokasi</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($umkm as $index => $item)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $item->nama_lengkap }}</td>
                            <td>{{ $item->nama_umkm }}</td>
                            <td>{{ ucfirst($item->skala_usaha) }}</td>
                            <td>{{ str_replace('_', ' ', ucfirst($item->jenis_kolaborasi)) }}</td>
                            <td>{{ $item->lokasi }}</td>
                            <td>
                                @if($item->status == 'menunggu')
                                    <span class="badge bg-warning text-light px-3 py-2">Menunggu</span>
                                @elseif($item->status == 'diterima')
                                    <span class="badge bg-success text-light px-3 py-2">Diterima</span>
                                @else
                                    <span class="badge bg-danger text-light px-3 py-2">Ditolak</span>
                                @endif
                            </td>
                            <td><a href="{{ route('admin.umkm.edit', $item->id) }}" style="text-decoration: underline;">Lihat</a></td>
                        </tr>
                    </div>
                    @empty
                        <tr>
                            <td colspan="8" class="text-center text-muted py-4">Belum ada data UMKM</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
