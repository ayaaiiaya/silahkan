@extends('components.layout')

@section('title', 'Halaman Dashboard')
<link rel="icon" type="image/x-icon" href="image/logoR.png" />

@section('header', 'Dashboard')

@section('content')
<div class="container-fluid mt-4">

    {{-- Baris 1: Statistik Card --}}
    <div class="row mb-4">
        <div class="col-lg-4 col-md-6 mb-3">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-white fw-semibold">
                    <i class="bi bi-people me-2"></i> Data Kemitraan
                </div>
                <div class="card-body text-center fs-4">
                    {{ $kemitraan }}
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-3">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-white fw-semibold">
                    <i class="bi bi-cash-stack me-2"></i> Data Donasi
                </div>
                <div class="card-body text-center fs-4">
                    {{ $donasi }}
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-12 mb-3">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-white fw-semibold">
                    <i class="bi bi-shop me-2"></i> Data UMKM
                </div>
                <div class="card-body text-center fs-4">
                    {{ $umkm }}
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-md-12">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-white fw-semibold">
                    <i class="bi bi-clock-history me-2"></i> Aktivitas Terbaru
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table mb-0 align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col" class="text-center">#</th>
                                    <th scope="col">Deskripsi Aktivitas</th>
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($aktivitas as $index => $a)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $a->deskripsi }}</td>
                                        <td>
                                            @if ($a->kategori == 'Donasi')
                                            <span class="badge bg-success text-light">{{ $a->kategori }}</span>
                                            @elseif ($a->kategori == 'UMKM')
                                            <span class="badge bg-primary text-light">{{ $a->kategori }}</span>
                                            @else
                                            <span class="badge bg-danger text-light">{{ $a->kategori }}</span>
                                            @endif
                                        </td>
                                       
                                        <td>{{ \Carbon\Carbon::parse($a->tanggal)->format('d M Y') }}</td>
                                        
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center text-muted">Belum ada aktivitas.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
