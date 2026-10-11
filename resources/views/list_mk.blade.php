
@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold mb-1">Daftar Mata Kuliah</h2>
            <p class="text-muted mb-0">Kelola data mata kuliah kamu.</p>
        </div>

        <a href="{{ route('matakuliah.create') }}"
           class="btn btn-primary px-3 py-2">
            + Tambah Mata Kuliah
        </a>
    </div>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close"
                    data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        </div>
    @endif

    <div class="card border-0 shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th class="px-4 py-3">ID</th>
                            <th class="py-3">Nama Mata Kuliah</th>
                            <th class="py-3">SKS</th>
                            <th class="py-3 text-center" style="width: 220px;">
                                Aksi
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($mks as $mk)
                            <tr>
                                <td class="px-4">{{ $mk->id }}</td>
                                <td class="fw-semibold">{{ $mk->nama_mk }}</td>
                                <td>
                                    <span class="badge bg-primary rounded-pill">
                                        {{ $mk->sks }} SKS
                                    </span>
                                </td>

                                <td class="text-center">
                                    <div class="d-inline-flex align-items-center gap-2">
                                        <a href="{{ route('matakuliah.edit', $mk->id) }}"
                                           class="btn btn-warning btn-sm px-3">
                                            ✎ Edit
                                        </a>

                                        <form action="{{ route('matakuliah.destroy', $mk->id) }}"
                                              method="POST"
                                              class="m-0"
                                              onsubmit="return confirm('Yakin ingin menghapus mata kuliah {{ $mk->nama_mk }}?')">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                    class="btn btn-outline-danger btn-sm px-3">
                                                Hapus
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center py-5 text-muted">
                                    Belum ada data mata kuliah.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
