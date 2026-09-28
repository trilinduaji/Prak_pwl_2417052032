@extends('layouts.app')

@section('content')
    <div class="container py-4 py-md-5">
        <div class="mx-auto" style="max-width: 700px;">
            <a href="{{ url('/user') }}" class="text-decoration-none text-secondary" style="font-size: 11px;">
                <i class="bi bi-arrow-left"></i>
                Kembali ke Daftar Pengguna
            </a>

            <div class="content-card mt-3">
                <div class="p-4 p-md-5">
                    <div class="d-flex align-items-center gap-3 pb-3 mb-4 border-bottom">
                        <span class="section-icon">
                            <i class="bi bi-person-plus-fill"></i>
                        </span>

                        <div>
                            <h1 class="h4 fw-bold mb-1">Form Tambah Pengguna</h1>
                            <p class="form-subtitle mb-0">
                                Lengkapi data berikut untuk mendaftarkan akun mahasiswa baru.
                            </p>
                        </div>
                    </div>

                    <form action="{{ route('user.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="nama" class="form-label">
                                Nama Lengkap <span class="text-danger">*</span>
                            </label>

                            <div class="input-group">
                                <span class="input-group-text bg-white border-end-0">
                                    <i class="bi bi-person text-secondary"></i>
                                </span>

                                <input
                                    type="text"
                                    class="form-control border-start-0"
                                    id="nama"
                                    name="nama"
                                    placeholder="Contoh: Muhammad Kevin Sanjaya"
                                    required>
                            </div>

                            <div class="field-help">
                                Gunakan nama lengkap sesuai KTP tanpa singkatan berlebih.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="npm" class="form-label">
                                Nomor Pokok Mahasiswa <span class="text-danger">*</span>
                            </label>

                            <div class="input-group">
                                <span class="input-group-text bg-white border-end-0">
                                    <i class="bi bi-credit-card-2-front text-secondary"></i>
                                </span>

                                <input
                                    type="text"
                                    class="form-control border-start-0"
                                    id="npm"
                                    name="npm"
                                    placeholder="Contoh: 2117051001"
                                    required>
                            </div>

                            <div class="field-help">
                                Pastikan format NPM sesuai data resmi kampus.
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="kelas_id" class="form-label">
                                Pilih Kelas Mahasiswa <span class="text-danger">*</span>
                            </label>

                            <div class="input-group">
                                <span class="input-group-text bg-white border-end-0">
                                    <i class="bi bi-mortarboard text-secondary"></i>
                                </span>

                                <select
                                    name="kelas_id"
                                    id="kelas_id"
                                    class="form-select border-start-0"
                                    required>
                                    <option value="" selected disabled>-- Pilih Ruang Kelas --</option>

                                    @foreach ($kelas as $kelasItem)
                                        <option value="{{ $kelasItem->id }}">
                                            {{ $kelasItem->nama_kelas }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="border-top pt-3 d-flex gap-2">
                            <a href="{{ url('/user') }}" class="btn btn-outline-secondary flex-grow-1">
                                <i class="bi bi-x-circle me-1"></i>
                                Batal / Kembali
                            </a>

                            <button type="submit" class="btn btn-primary flex-grow-1">
                                <i class="bi bi-check-circle-fill me-1"></i>
                                Simpan Data Mahasiswa
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <p class="text-center text-secondary mt-3 mb-0" style="font-size: 10px;">
                <i class="bi bi-shield-check"></i>
                Data yang dikirim akan langsung tersimpan secara aman ke database akademik.
            </p>
        </div>
    </div>
@endsection