<div class="card border-0 shadow-sm">
    <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
            <thead class="table-primary">
                <tr>
                    <th class="ps-4">ID</th>
                    <th>Nama</th>
                    <th>NPM</th>
                    <th>Kelas</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($users as $user)
                    <tr>
                        <td class="ps-4">{{ $user->id }}</td>
                        <td class="fw-semibold">{{ $user->nama }}</td>
                        <td>{{ $user->nim }}</td>
                        <td>
                            <span class="badge text-bg-primary">
                                {{ $user->nama_kelas }}
                            </span>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center text-muted py-4">
                            Belum ada data pengguna.
                        </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>