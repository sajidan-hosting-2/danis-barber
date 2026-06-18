<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Galeri - Jompi TimHairstylist</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        html, body {
            overflow-x: hidden;
            width: 100%;
        }
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #ffffff;
            color: #1a1a1a;
        }


        :root {
            --accent-blue: #3b82f6;
        }

        .navbar-custom {
            background-color: #1a1a1a;
            border-bottom: 2px solid var(--accent-blue);
        }

        .navbar-custom .navbar-brand {
            color: #ffffff !important;
        }

        .navbar-custom a.btn,
        .navbar-custom .btn-outline-light {
            color: #ffffff !important;
        }

        .navbar-custom a.btn-outline-light {
            border-color: rgba(255,255,255,.6) !important;
        }

        .btn-outline-light:hover {
            border-color: var(--accent-blue) !important;
            background-color: rgba(59, 130, 246, 0.12) !important;
            color: #ffffff !important;
        }

        .btn-gold {
            background-color: #d4af37;
            color: #1a1a1a;
            font-weight: bold;
            border: none;
            transition: all 0.3s;
        }
        .btn-gold:hover {
            background-color: #b5922b;
            color: white;
        }
        .card-custom {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .card-custom:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

<nav class="navbar navbar-custom navbar-expand-lg py-3">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/">
            <i class="fas fa-cut me-2"></i> CPP GANTENG
        </a>
        <div class="d-flex gap-2">
            <a class="btn btn-gold btn-sm px-3" href="/admin/galeri/create">
                <i class="fas fa-plus me-1"></i> Tambah Galeri
            </a>
            <form method="POST" action="{{ route('admin.logout') }}" class="m-0">
                @csrf
                <button type="submit" class="btn btn-outline-light btn-sm px-3">
                    <i class="fas fa-sign-out-alt me-1"></i> Logout
                </button>
            </form>
        </div>
    </div>
</nav>

<div class="container py-4">
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h3 class="mb-0 fw-bold">Manajemen Galeri</h3>
    </div>

    @if (session('success'))
        <div class="alert alert-success border-0 shadow-sm alert-dismissible fade show" role="alert">
            <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="row g-3">
        @forelse($galeris as $galeri)
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 card-custom">
                    <img
                        src="{{ asset('storage/' . $galeri->image_path) }}"
                        alt="{{ $galeri->title ?? 'Galeri' }}"
                        class="card-img-top"
                        style="aspect-ratio: 4 / 3; object-fit: cover; width: 100%;"
                    />

                    <div class="card-body d-flex flex-column p-2 p-sm-3">
                        <div class="fw-semibold text-truncate mb-1" style="font-size: 13px;" title="{{ $galeri->title ?? 'Tanpa Judul' }}">
                            {{ $galeri->title ?? 'Tanpa Judul' }}
                        </div>
                        <div class="small text-muted mb-2" style="font-size: 11px;">
                            Sort: {{ $galeri->sort_order }} | {{ $galeri->is_active ? 'Aktif' : 'Nonaktif' }}
                        </div>

                        <div class="mt-auto pt-2">
                            <form action="{{ route('admin.galeri.destroy', $galeri) }}" method="POST" class="m-0">
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm w-100 py-1" style="font-size: 12px; font-weight: 500;" onclick="return confirm('Hapus galeri ini?')">
                                    <i class="fas fa-trash-alt me-1"></i> Hapus
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="alert alert-secondary text-center py-4 border-0 shadow-sm">
                    <i class="fas fa-image fa-2x mb-2 text-muted"></i>
                    <div>Belum ada data galeri.</div>
                </div>
            </div>
        @endforelse
    </div>
</div>

<!-- Bootstrap Bundle JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
