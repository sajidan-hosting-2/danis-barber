<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background: #f4f6f9;
        }

        .card-custom {
            border: none;
            border-radius: 14px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.06);
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
    </style>
</head>
<body>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-5">
            <div class="text-center mb-4">
                <div class="fw-bold" style="font-size: 22px;">Admin Login</div>
                <div class="text-muted" style="font-size: 13px;">Akses manajemen galeri</div>
            </div>

            @if(session('success'))
                <div class="alert alert-success border-0 shadow-sm">
                    <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
                </div>
            @endif
            @if(session('error'))
                <div class="alert alert-danger border-0 shadow-sm">
                    <i class="fas fa-exclamation-circle me-2"></i>{{ session('error') }}
                </div>
            @endif

            <div class="card card-custom p-4">
                <form method="POST" action="{{ route('admin.login.submit') }}" autocomplete="off">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Email</label>
                        <input type="email" name="email" class="form-control py-2" value="{{ old('email') }}" required>
                        @error('email')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Password</label>
                        <input type="password" name="password" class="form-control py-2" required>
                        @error('password')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-gold w-100 py-2">
                        <i class="fas fa-lock me-2"></i>Login Admin
                    </button>

                    <div class="text-center mt-3 text-muted" style="font-size: 12px;">
                        Disarankan gunakan akses yang aman (HTTPS) dan jangan bagikan kredensial admin.
                    </div>
                </form>
            </div>

            <div class="text-center mt-3 text-muted" style="font-size: 12px;">
                <i class="fas fa-shield-halved me-1"></i> Rate limit aktif untuk mencegah brute force.
            </div>
        </div>
    </div>
</div>

</body>
</html>

