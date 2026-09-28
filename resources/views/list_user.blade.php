@extends('layouts.app')

@section('content')
    <div class="container py-4 py-md-5">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-3">
            <div>
                <div class="text-primary fw-semibold mb-1" style="font-size: 10px;">
                    <i class="bi bi-database-fill"></i>
                    Data Master
                    <span class="text-secondary">• Modul Praktikum PWL</span>
                </div>

                <h1 class="page-title">Data Pengguna</h1>
                <p class="page-description mb-0">
                    Kelola dan pantau seluruh data mahasiswa beserta kelas terdaftar.
                </p>
            </div>

            <a href="{{ route('user.create') }}" class="btn btn-primary px-3">
                <i class="bi bi-person-plus-fill me-1"></i>
                Tambah User Baru
            </a>
        </div>

        @if (session('success'))
            <div class="success-alert alert alert-dismissible fade show py-3 mb-3" role="alert">
                <i class="bi bi-check-circle-fill text-success me-1"></i>
                <strong>Berhasil!</strong> {{ session('success') }}

                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <div class="content-card overflow-hidden">
            <div class="table-card-header bg-white p-3 d-flex justify-content-between align-items-center">
                <div>
                    <div class="table-title">
                        <i class="bi bi-table text-primary me-1"></i>
                        Tabel Data Mahasiswa
                    </div>

                    <div class="table-subtitle">
                        Daftar mahasiswa terdaftar di semester ganjil
                    </div>
                </div>

                <span class="border rounded-pill px-3 py-1 text-secondary" style="font-size: 10px;">
                    Total: {{ $users->count() }} Mahasiswa
                </span>
            </div>

            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th class="ps-3">No</th>
                            <th>NPM</th>
                            <th>Nama Pengguna</th>
                            <th>Kelas</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($users as $user)
                            <tr>
                                <td class="ps-3">{{ $loop->iteration }}</td>

                                <td>
                                    <i class="bi bi-credit-card-2-front text-primary me-1"></i>
                                    <span class="fw-semibold">{{ $user->nim }}</span>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="user-avatar">
                                            {{ \Illuminate\Support\Str::upper(\Illuminate\Support\Str::substr($user->nama, 0, 1)) }}
                                        </span>

                                        <div>
                                            <div class="fw-bold">{{ $user->nama }}</div>
                                            <small class="text-secondary">
                                                <i class="bi bi-patch-check-fill text-info"></i>
                                                Mahasiswa Aktif
                                            </small>
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    <span class="kelas-badge">
                                        <i class="bi bi-bookmark-fill me-1"></i>
                                        {{ $user->nama_kelas }}
                                    </span>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center py-5 text-secondary">
                                    <i class="bi bi-inbox fs-3 d-block mb-2"></i>
                                    Belum ada data mahasiswa.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="table-summary bg-white px-3 py-2 d-flex justify-content-between">
                <span>
                    <i class="bi bi-info-circle"></i>
                    Menampilkan {{ $users->count() }} data mahasiswa terdaftar.
                </span>

                <span>
                    <i class="bi bi-shield-check text-success"></i>
                    Sinkronisasi Database Realtime
                </span>
            </div>
        </div>
    </div>
@endsection