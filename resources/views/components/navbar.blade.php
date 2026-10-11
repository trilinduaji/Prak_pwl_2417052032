<nav class="navbar navbar-expand-lg navbar-dark portal-navbar shadow-sm">
    <div class="container">
        <a class="navbar-brand portal-brand d-flex align-items-center gap-2" href="{{ url('/user') }}">
            <span class="brand-icon">
                <i class="bi bi-mortarboard-fill"></i>
            </span>

            <span>
                Portal Mahasiswa
                <small>Pemrograman Web Lanjut</small>
            </span>
        </a>

        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-1">
                <li class="nav-item">
                    <a
                        class="nav-link {{ request()->is('user') ? 'active' : '' }}"
                        href="{{ url('/user') }}">
                        <i class="bi bi-people-fill me-1"></i>
                        Daftar User
                    </a>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link {{ request()->is('user/create') ? 'active' : '' }}"
                        href="{{ route('user.create') }}">
                        <i class="bi bi-person-plus-fill me-1"></i>
                        Tambah User
                    </a>
                </li>

                <li class="nav-item ms-lg-2">
                    <span class="semester-badge">
                        <i class="bi bi-mortarboard me-1"></i>
                        Akademik 2024/2025
                    </span>
                </li>
            </ul>
        </div>
    </div>
</nav>