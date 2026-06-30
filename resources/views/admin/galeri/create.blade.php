<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Galeri - Jompi TimHairstylist</title>
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
            background-color: #f4f6f9;
            color: #1a1a1a;
        }
        .navbar-custom {
            background-color: #1a1a1a;
            border-bottom: 2px solid #d4af37;
        }
        .navbar-custom .navbar-brand {
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
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            background-color: #ffffff;
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
            <a class="btn btn-outline-light btn-sm px-3" href="/admin/galeri">
                <i class="fas fa-arrow-left me-1"></i> Kembali
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
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6">
            <div class="card card-custom p-3 p-sm-4">
                <h3 class="mb-4 fw-bold text-center">Tambah Data Galeri</h3>

                @if ($errors->any())
                    <div class="alert alert-danger border-0 shadow-sm alert-dismissible fade show" role="alert">
                        <ul class="mb-0 px-3" style="font-size: 13px;">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <form action="{{ route('admin.galeri.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label fw-semibold" style="font-size: 14px;">Judul (opsional)</label>
                        <input type="text" name="title" class="form-control py-2" value="{{ old('title') }}" placeholder="Contoh: Style Pengantin">
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold" style="font-size: 14px;">Gambar</label>
                        <input type="file" name="image" class="form-control py-2" accept=".jpg,.jpeg,.png,.webp,.svg,image/jpeg,image/png,image/webp,image/svg+xml">
                        <div class="form-text mt-2">
                            <strong>Maksimal ukuran file:</strong> 200 KB.<br>
                            <strong>Rekomendasi format:</strong> JPEG/JPG untuk foto biasa, PNG/SVG untuk logo dengan latar transparan, dan WebP untuk kualitas tinggi dengan ukuran lebih kecil.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold" style="font-size: 14px;">Urutan Tampil (sort_order)</label>
                        <input type="number" name="sort_order" class="form-control py-2" min="0" value="{{ old('sort_order', 0) }}">
                    </div>

                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" name="is_active" value="1" id="is_active" {{ old('is_active', true) ? 'checked' : '' }}>
                        <label class="form-check-label fw-medium" for="is_active" style="font-size: 14px;">Tampilkan di Galeri</label>
                    </div>

                    <button type="submit" class="btn btn-gold w-100 py-2 fw-bold">
                        <i class="fas fa-save me-1"></i> Simpan
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap Bundle JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
