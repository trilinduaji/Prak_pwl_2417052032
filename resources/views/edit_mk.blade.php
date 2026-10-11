
@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">

            <div class="mb-4">
                <a href="{{ url('/matakuliah') }}"
                   class="text-decoration-none text-muted small">
                    &larr; Kembali ke Daftar Mata Kuliah
                </a>

                <h1 class="fw-bold mt-3 mb-2">Edit Mata Kuliah</h1>
                <p class="text-muted mb-0">
                    Perbarui informasi mata kuliah melalui formulir berikut.
                </p>
            </div>

            <div class="card border-0 shadow-sm rounded-4">
                <div class="card-body p-4 p-md-5">

                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="edit-icon">
                            <span>✎</span>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1">Informasi Mata Kuliah</h5>
                            <p class="text-muted small mb-0">
                                ID Mata Kuliah: {{ $mk->id }}
                            </p>
                        </div>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger rounded-3">
                            <strong>Periksa kembali data kamu.</strong>
                            <ul class="mb-0 mt-2">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('matakuliah.update', $mk->id) }}"
                          method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="nama_mk" class="form-label fw-semibold">
                                Nama Mata Kuliah
                            </label>

                            <input
                                type="text"
                                class="form-control form-control-lg rounded-3"
                                id="nama_mk"
                                name="nama_mk"
                                value="{{ old('nama_mk', $mk->nama_mk) }}"
                                placeholder="Masukkan nama mata kuliah"
                                required
                            >

                            <div class="form-text">
                                Masukkan nama mata kuliah yang benar.
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="sks" class="form-label fw-semibold">
                                Jumlah SKS
                            </label>

                            <select
                                class="form-select form-select-lg rounded-3"
                                id="sks"
                                name="sks"
                                required
                            >
                                <option value="">Pilih jumlah SKS</option>
                                @foreach ([1, 2, 3, 4, 5, 6] as $jumlah)
                                    <option value="{{ $jumlah }}"
                                        {{ (string) old('sks', $mk->sks) === (string) $jumlah ? 'selected' : '' }}>
                                        {{ $jumlah }} SKS
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <hr class="my-4">

                        <div class="d-flex flex-column flex-sm-row gap-2 justify-content-end">
                            <a href="{{ url('/matakuliah') }}"
                               class="btn btn-light border rounded-3 px-4 py-2">
                                Batal
                            </a>

                            <button type="submit"
                                    class="btn btn-update rounded-3 px-4 py-2">
                                <span class="me-1">✓</span>
                                Simpan Perubahan
                            </button>
                        </div>
                    </form>

                </div>
            </div>

            <p class="text-muted small mt-3 text-center">
                Pastikan informasi yang diperbarui sudah benar sebelum disimpan.
            </p>

        </div>
    </div>
</div>
@endsection
