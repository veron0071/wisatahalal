<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Wisata Halal Jabal Nur')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">Wisata Jabal Nur</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('ulama.index') }}">Sejarah Ulama</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('fasilitas.index') }}">Fasilitas</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('umkm.index') }}">UMKM Halal</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container mt-4">
        @yield('content')
    </main>

    <footer class="text-center mt-5 py-3 bg-light">
        <p>&copy; 2025 Wisata Halal Jabal Nur. Dikembangkan oleh PD MES Kendal.</p>
    </footer>
</body>
</html>
