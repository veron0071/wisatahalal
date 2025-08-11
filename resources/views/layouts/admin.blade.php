<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Admin Panel')</title>

    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Optional: Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .admin-content {
            flex: 1;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('admin.dashboard') }}">Admin Panel</a>
            <form action="{{ route('logout') }}" method="POST" class="d-flex">
                @csrf
                <button class="btn btn-outline-light btn-sm" type="submit">
                    <i class="bi bi-box-arrow-right"></i> Logout
                </button>
            </form>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container-fluid mt-4 admin-content">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 mb-3">
                <div class="list-group">
                    <a href="{{ route('admin.ulama.index') }}" class="list-group-item list-group-item-action">
    <i class="bi bi-person-lines-fill"></i> Data Ulama
</a>
<a href="{{ route('admin.fasilitas.index') }}" class="list-group-item list-group-item-action">
    <i class="bi bi-building"></i> Data Fasilitas
</a>
<a href="{{ route('admin.umkm.index') }}" class="list-group-item list-group-item-action">
    <i class="bi bi-shop"></i> Data UMKM
</a>
<a href="{{ route('admin.ceramahs.index') }}" class="list-group-item list-group-item-action">
    <i class="bi bi-mic"></i> Ceramah & Kajian
</a>
<a href="{{ route('admin.ziarahs.index') }}" class="list-group-item list-group-item-action">
    <i class="bi bi-geo-alt"></i> Lokasi Ziarah
</a>
<a href="{{ route('admin.videos.index') }}" class="list-group-item list-group-item-action">
    <i class="bi bi-play-btn"></i> Video
</a>
<a href="{{ route('admin.paketwisatas.index') }}" class="list-group-item list-group-item-action">
    <i class="bi bi-backpack4"></i> Paket Wisata
</a>
<a href="{{ route('admin.sertifikasis.index') }}" class="list-group-item list-group-item-action">
    <i class="bi bi-award"></i> Sertifikasi Halal
</a>
<a href="{{ route('admin.manuskrips.index') }}" class="list-group-item list-group-item-action">
    <i class="bi bi-journal-bookmark"></i> Arsip Manuskrip
</a>
<a href="{{ route('admin.stakeholders.index') }}" class="list-group-item list-group-item-action">
    <i class="bi bi-people"></i> Stakeholders
</a>
                </div>
            </div>

            <!-- Content -->
            <div class="col-md-9">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3 mt-auto">
        &copy; {{ date('Y') }} Admin Panel - Wisata Halal Jabal Nur
    </footer>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
