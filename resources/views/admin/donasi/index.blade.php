@extends('components.layout')

@section('title', 'Data Donasi')
<link rel="icon" type="image/x-icon" href="{{ asset('image/logoR.png') }}" />

@section('header', 'Data Donasi')

@section('content')
    <div class="card shadow-sm p-4">
        <h5 class="mb-4 fw-bold">Daftar Donasi</h5>

        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Alamat</th>
                        <th>Jenis Donasi</th>
                        <th>Tanggal Donasi</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($donasi as $index => $item)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $item->nama_lengkap }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ ucwords(str_replace('_', ' ', $item->jenis_donasi)) }}</td>
                            <td>{{ $item->created_at->format('d M Y') }}</td>
                            <td>
                                @if($item->status == 'menunggu')
                                    <span class="badge bg-warning text-light px-3 py-2">Menunggu</span>
                                @elseif($item->status == 'disetujui')
                                    <span class="badge bg-success text-light px-3 py-2">Disetujui</span>
                                @else
                                    <span class="badge bg-danger text-light px-3 py-2">Ditolak</span>
                                @endif
                            </td>
                            <td><a href="{{ route('admin.donasi.edit', $item->id) }}" style="text-decoration: underline;">Lihat</a></td>
                        </tr>
                    </div>
                    @empty
                        <tr>
                            <td colspan="8" class="text-center text-muted py-4">Belum ada data Donasi</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
