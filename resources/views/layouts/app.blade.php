<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
        rel="stylesheet">

    <style>
        :root {
            --primary: #4634c9;
            --primary-dark: #3726ad;
            --surface: #ffffff;
            --background: #f5f7fb;
            --text: #17224a;
            --muted: #64748b;
            --border: #e7eaf1;
        }

        * {
            box-sizing: border-box;
        }

        body {
            background: var(--background);
            color: var(--text);
            font-family: Arial, sans-serif;
        }

        .app-main {
            min-height: calc(100vh - 126px);
        }

        .portal-navbar {
            background: var(--primary);
            min-height: 64px;
        }

        .portal-brand {
            color: white !important;
            font-size: 14px;
            font-weight: 700;
            line-height: 1.1;
        }

        .portal-brand small {
            display: block;
            font-size: 8px;
            font-weight: 400;
            opacity: 0.85;
        }

        .brand-icon,
        .footer-icon {
            width: 28px;
            height: 28px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: white;
            color: var(--primary);
            border-radius: 7px;
        }

        .navbar-nav .nav-link {
            color: rgba(255, 255, 255, 0.72);
            font-size: 12px;
            font-weight: 600;
            padding: 8px 13px !important;
            border-radius: 5px;
        }

        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link.active {
            color: white;
            background: rgba(255, 255, 255, 0.14);
        }

        .semester-badge {
            background: white;
            color: var(--primary);
            font-size: 9px;
            font-weight: 700;
            border-radius: 20px;
            padding: 5px 12px;
        }

        .page-title {
            font-size: 25px;
            font-weight: 800;
            margin-bottom: 4px;
        }

        .page-description,
        .form-subtitle {
            color: var(--muted);
            font-size: 12px;
        }

        .content-card {
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: 11px;
            box-shadow: 0 4px 14px rgba(15, 23, 42, 0.04);
        }

        .section-icon {
            width: 37px;
            height: 37px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 6px;
            background: linear-gradient(135deg, #4938d8, #6a5cf1);
            color: white;
        }

        .form-label {
            color: #334155;
            font-size: 10px;
            font-weight: 800;
            letter-spacing: 0.2px;
            text-transform: uppercase;
        }

        .form-control,
        .form-select {
            border-color: #dfe4ed;
            border-radius: 6px;
            font-size: 12px;
            min-height: 39px;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 0.2rem rgba(70, 52, 201, 0.12);
        }

        .field-help {
            color: var(--muted);
            font-size: 10px;
            margin-top: 5px;
        }

        .btn-primary {
            background: var(--primary);
            border-color: var(--primary);
            font-size: 12px;
            font-weight: 700;
        }

        .btn-primary:hover {
            background: var(--primary-dark);
            border-color: var(--primary-dark);
        }

        .btn-outline-secondary {
            font-size: 12px;
            font-weight: 600;
        }

        .success-alert {
            background: white;
            border: 1px solid #e5e9ef;
            border-left: 3px solid #16a34a;
            color: #334155;
            border-radius: 8px;
            font-size: 12px;
        }

        .table-card-header {
            border-bottom: 1px solid var(--border);
        }

        .table-title {
            font-size: 12px;
            font-weight: 800;
        }

        .table-subtitle {
            color: var(--muted);
            font-size: 10px;
        }

        .table thead th {
            background: #eef1ff;
            color: #4634c9;
            font-size: 9px;
            font-weight: 800;
            padding: 11px 14px;
            text-transform: uppercase;
        }

        .table tbody td {
            border-color: #eef0f5;
            color: #334155;
            font-size: 12px;
            padding: 11px 14px;
            vertical-align: middle;
        }

        .user-avatar {
            width: 24px;
            height: 24px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: #5d50db;
            color: white;
            border-radius: 50%;
            font-size: 10px;
            font-weight: 800;
        }

        .kelas-badge {
            background: #ecebff;
            color: #4c3bc6;
            border-radius: 5px;
            font-size: 10px;
            font-weight: 700;
            padding: 5px 8px;
        }

        .table-summary {
            border-top: 1px solid var(--border);
            color: var(--muted);
            font-size: 10px;
        }

        .portal-footer {
            background: white;
            border-top: 1px solid var(--border);
            color: var(--muted);
            font-size: 10px;
        }

        @media (max-width: 991px) {
            .navbar-nav {
                padding-top: 12px;
            }

            .semester-badge {
                display: inline-block;
                margin-top: 10px;
            }
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">
    @include('components.navbar')

    <main class="app-main flex-grow-1">
        @yield('content')
    </main>

    @include('components.footer')

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>
</body>
</html>