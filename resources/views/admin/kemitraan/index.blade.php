@extends('components.layout')

@section('title', 'Data Kemitraan')
<link rel="icon" type="image/x-icon" href="{{ asset('image/logoR.png') }}" />

@section('header', 'Data Kemitraan')

@section('content')
    <div class="card shadow-sm p-4">
        <h5 class="mb-4 fw-bold">Daftar Kemitraan</h5>

        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Alamat</th>
                        <th>Jenis Kemitraan</th>
                        <th>Ketersediaan Armada</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($kemitraan as $index => $item)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $item->nama_lengkap }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ ucwords(str_replace('_', ' ', $item->jenis_kemitraan)) }}</td>
                            <td>{{ ucwords(str_replace('_', ' ', $item->armada)) }}</td>
                            <td>
                                @if($item->status == 'menunggu')
                                    <span class="badge bg-warning text-light px-3 py-2">Menunggu</span>
                                @elseif($item->status == 'diterima')
                                    <span class="badge bg-success text-light px-3 py-2">Diterima</span>
                                @else
                                    <span class="badge bg-danger text-light px-3 py-2">Ditolak</span>
                                @endif
                            </td>
                            <td><a href="{{ route('admin.kemitraan.edit', $item->id) }}" style="text-decoration: underline;">Lihat</a></td>
                        </tr>
                    </div>
                    @empty
                        <tr>
                            <td colspan="8" class="text-center text-muted py-4">Belum ada data Kemitraan</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
