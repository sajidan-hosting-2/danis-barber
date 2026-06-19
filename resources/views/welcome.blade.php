<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jompi TimHairstylist</title>
    <link rel="icon" type="image/jpeg" href="{{ asset('image/logo.jpeg') }}" />
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/welcome-white-navbar.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

    <!-- Floating Sosmed Button -->
    <div class="sosmed-float">
        <a href="https://wa.me/6282126982529" target="_blank" class="wa-float" title="Chat WhatsApp">
            <i class="fab fa-whatsapp"></i>
        </a>
        <a href="https://www.instagram.com/jompi_timhairstylist?utm_source=qr" target="_blank" class="ig-float" title="Follow Instagram">
            <i class="fab fa-instagram"></i>
        </a>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg" style="background: rgba(255,255,255,0.2); backdrop-filter: blur(10px); border-bottom: 1px solid rgba(0,0,0,0.1);">

        <div class="container">
            <a class="navbar-brand fw-bold d-flex align-items-center gap-2" href="/admin/login">
                <img src="{{ asset('image/logo.jpeg') }}" alt="Logo" class="navbar-logo" />
                <span>Jompi TimHairstylist</span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav text-center">
                    <li class="nav-item"><a class="nav-link" href="#tentang">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="#paket">Paket</a></li>
                    <li class="nav-item"><a class="nav-link" href="#galeri">Galeri</a></li>
                    <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

    @if(session('success'))
        <div class="container mt-3">
            <div class="alert alert-success border-0 shadow-sm">
                <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
            </div>
        </div>
    @endif

    <!-- Hero Section -->
    <header class="hero-section">
        <div class="container hero-row">
            <div class="hero-image">
                <img src="{{ asset('image/image.jpg') }}" alt="Jompi TimHairstylist" />
            </div>
            <div class="hero-copy text-start">
                <h2 class=" fw-bold mb-3">💈 Jompi TimHairstylist 💈 </h2>
                <h2 class=" fw-bold mb-3"> Acara Makin Berkesan </h2>
                <p class=" h2 lead mb-4">Hair Stylist with Jompi & Tim</p>
                <p class="h4 mb-5">Paket lengkap untuk calon pengantin pria,<br> tampil percaya diri & berkelas di hari bahagia.</p>
                <a href="#paket" class="btn btn-gold btn-lg">Lihat Paket</a>
            </div>
        </div>
    </header>

    <!-- Tentang Section -->
    <section id="tentang" class="section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="{{ asset('image/danda.jpeg') }}" class="img-fluid rounded shadow" alt="Tentang CPP">
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                    <h2 class="fw-bold text-uppercase mb-4 section-title">Tentang Kami</h2>
                    <p class="lead text-cream">Kami adalah layanan hairstyling khusus pria untuk acara pernikahan.</p>
                    <p class="text-muted-custom">Dikerjakan oleh tim profesional <strong class="text-gold">Jompi TimHairstylist</strong> <strong class="text-gold"> X Dome</strong>, kami siap membuat pengantin pria terlihat percaya diri di hari bahagia.</p>
                    <ul class="feature-list mt-4">
                        <li><i class="fas fa-star"></i> Stylist Professional & Berpengalaman</li>
                        <li><i class="fas fa-star"></i> Menggunakan Produk Premium</li>
                        <li><i class="fas fa-star"></i> Service di Lokasi (On Site)</li>
                        <li><i class="fas fa-star"></i> Garansi Rapi Sehari Penuh</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Packages Section -->
    <section id="paket" class="py-5 section-dark">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="text-uppercase fw-bold section-title">Pilih Paket Perfect</h2>
                <div class="separator" style="width: 60px; height: 3px; background: var(--accent-color); margin: 10px auto;"></div>
            </div>

            <div class="row g-4 justify-content-center align-items-stretch">
                <!-- Regular Package -->
                <div class="col-12 col-md-6 d-flex">
                    <div class="card pricing-card h-100 p-4 d-flex flex-column w-100">
                        <div class="card-body text-center d-flex flex-column h-100">
                            <h3 class="card-title text-uppercase fw-bold mb-3">Regular Package</h3>
                            <h2 class="text-gold fw-bold mb-4">Rp 500.000</h2>
                            <ul class="feature-list text-start mx-auto mb-4" style="max-width: 300px; flex-grow: 1;">
                                <li><i class="fas fa-check-circle"></i> Konsultasi styling & produk rambut</li>
                                <li><i class="fas fa-check-circle"></i> Standby di lokasi sesuai jam</li>
                                <li><i class="fas fa-check-circle"></i> Hairstyling khusus resepsi</li>
                                <li><i class="fas fa-check-circle"></i> Paket produk styling rambut</li>
                                <li><i class="fas fa-gift" style="color:#4ade80;"></i> FREE hairstyling untuk 1 orang</li>
                            </ul>
                            <button class="btn btn-outline-gold w-100 mt-auto" onclick="window.open('https://wa.me/6282126982529?text=Halo%20CPP%20Ganteng!%20Saya%20ingin%20booking%20paket%20Regular%20untuk%20acara%20pernikahan%20saya.', '_blank')">Pilih Regular</button>
                        </div>
                    </div>
                </div>

                <!-- Extra Package -->
                <div class="col-12 col-md-6 d-flex">
                    <div class="card pricing-card pricing-featured h-100 p-4 d-flex flex-column w-100">
                        <div class="card-body text-center d-flex flex-column h-100">
                            <span class="badge-best mb-2">✦ TERBAIK ✦</span>
                            <h3 class="card-title text-uppercase fw-bold mb-3">Extra Package</h3>
                            <h2 class="text-gold fw-bold mb-4">Rp 650.000</h2>
                            <ul class="feature-list text-start mx-auto mb-4" style="max-width: 300px; flex-grow: 1;">
                                <li><i class="fas fa-scissors" style="color:#d4af37;"></i> Potong rambut + executive treatment (H-3) @Dome Barbershop</li>
                                <li><i class="fas fa-check-circle"></i> Konsultasi styling & produk rambut</li>
                                <li><i class="fas fa-check-circle"></i> Standby di lokasi sesuai jam</li>
                                <li><i class="fas fa-check-circle"></i> Hairstyling khusus resepsi</li>
                                <li><i class="fas fa-check-circle"></i> Paket produk styling rambut</li>
                                <li><i class="fas fa-gift" style="color:#d4af37;"></i> BONUS: 1 pcs Mark Hair Tonic</li>
                                <li><i class="fas fa-gift" style="color:#4ade80;"></i> FREE hairstyling untuk 2 orang</li>
                            </ul>
                            <button class="btn btn-gold w-100 fw-bold mt-auto" onclick="window.open('https://wa.me/6282126982529?text=Halo%20CPP%20Ganteng!%20Saya%20ingin%20booking%20paket%20Extra%20untuk%20acara%20pernikahan%20saya.', '_blank')">Pilih Extra</button>
                        </div>
                    </div>
                </div>

                <!-- Groom All Package -->
                <div class="col-12 col-md-6 d-flex">
                    <div class="card pricing-card pricing-featured h-100 p-4 d-flex flex-column w-100">
                        <div class="card-body text-center d-flex flex-column h-100">
                            <span class="badge-best mb-2">🔥 JOMPI GROOM ALL PACKAGE 🔥</span>
                            <h3 class="card-title text-uppercase fw-bold mb-3">All Package</h3>
                            <h2 class="text-gold fw-bold mb-4">Rp 1.000.000</h2>
                            <ul class="feature-list text-start mx-auto mb-4" style="max-width: 300px; flex-grow: 1;">
                                <li><i class="fas fa-check-circle"></i> Tahap 1: Prewedding + styling on-location</li>
                                <li><i class="fas fa-check-circle"></i> Potong + reguler treatment H-1 @Dome Barbershop</li>
                                <li><i class="fas fa-check-circle"></i> Tahap 2: Resepsi dari akad sampai after party</li>
                                <li><i class="fas fa-check-circle"></i> Potong + executive treatment H-3 @Dome Barbershop</li>
                                <li><i class="fas fa-check-circle"></i> Konsultasi styling final & on-site standby</li>
                                <li><i class="fas fa-check-circle"></i> Produk premium lengkap: pomade, spray, tonic, powder</li>
                                <li><i class="fas fa-gift" style="color:#4ade80;"></i> BONUS: Mark Hair Tonic + FREE styling 2 orang</li>
                            </ul>
                            <button class="btn btn-gold w-100 fw-bold mt-auto" onclick="window.open('https://wa.me/6282126982529?text=Halo%20CPP%20Ganteng!%20Saya%20ingin%20booking%20paket%20JOMPI%20GROOM%20ALL%20PACKAGE%20untuk%20acara%20pernikahan%20saya.', '_blank')">Pilih Groom All</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Galeri Section -->
    <section id="galeri" class="section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="text-uppercase fw-bold section-title">Galeri Gaya Rambut</h2>
                <div class="separator" style="width: 60px; height: 3px; background: var(--accent-color); margin: 10px auto;"></div>
                <p class="mt-3 text-muted-custom">Inspirasi gaya rambut pengantin pria yang pernah kami layani</p>
            </div>

            <div class="row g-3 gallery-list">
                @forelse($galeris as $galeri)
                    <div class="col-md-4 col-6">
                        <div class="gallery-item {{ $loop->index >= 3 ? 'gallery-item-hidden' : '' }}">
                            <img src="{{ asset('storage/' . $galeri->image_path) }}" alt="{{ $galeri->title ?? 'Galeri' }}">
                            <div class="gallery-overlay text-white"><i class="fas fa-check fa-2x"></i></div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="alert alert-secondary">Belum ada data galeri.</div>
                    </div>
                @endforelse
            </div>
            @if($galeris->count() > 3)
                <div class="text-center mt-4">
                    <button id="show-all-gallery" class="btn btn-outline-gold">Lihat Semua Gambar</button>
                </div>
            @endif
        </div>
    </section>

    <!-- Kontak Section -->
    <section id="kontak" class="section-padding section-dark">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="text-uppercase fw-bold section-title">Hubungi Kami</h2>
                <div class="separator" style="width: 60px; height: 3px; background: var(--accent-color); margin: 10px auto;"></div>
            </div>

            <div class="row g-4 justify-content-center mb-5">
                <!-- Alamat -->
                <div class="col-md-4">
                    <div class="card kontak-card h-100 p-4 text-center">
                        <i class="fas fa-map-marker-alt text-gold fa-2x mb-3"></i>
                        <h5 class="fw-bold text-cream">Alamat</h5>
                        <p class="text-muted-custom small">Dome barbershop Jl. R. Ikik Wiradikarta No.16, Yudanagara, Kec. Cihideung, Kab. Tasikmalaya, Jawa Barat 46112</p>
                    </div>
                </div>

                <!-- WhatsApp -->
                <div class="col-md-4">
                    <div class="card kontak-card h-100 p-4 text-center">
                        <i class="fab fa-whatsapp text-gold fa-2x mb-3"></i>
                        <h5 class="fw-bold text-cream">WhatsApp</h5>
                        <p class="text-muted-custom small mb-2">+62 821-2698-2529</p>
                        <a href="https://wa.me/6282126982529" target="_blank" class="btn btn-success btn-sm">
                            <i class="fab fa-whatsapp"></i> Chat
                        </a>
                    </div>
                </div>

                <!-- Instagram -->
                <div class="col-md-4">
                    <div class="card kontak-card h-100 p-4 text-center">
                        <i class="fab fa-instagram text-gold fa-2x mb-3"></i>
                        <h5 class="fw-bold text-cream">Instagram</h5>
                        <p class="text-muted-custom small mb-2">@jompi_timhairstylist</p>
                        <a href="https://www.instagram.com/jompi_timhairstylist?utm_source=qr" target="_blank" class="btn btn-danger btn-sm">
                            <i class="fab fa-instagram"></i> Follow
                        </a>
                    </div>
                </div>
            </div>

            <!-- Google Maps -->
            <div class="map-container">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15909.449076487999!2d108.219987!3d-7.324006!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f5748d49d7613%3A0x7ee6679066d23137!2zRG9tZSBCYXJiZXIgU2hvcA==!5e0!3m2!1sid!2sid!4v1710000000000"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>

    <!-- Penutup Section -->
    <section id="penutup" class="section-padding">
        <div class="container">
            <div class="row align-items-start g-4 g-lg-4">
                <div class="col-12 col-lg-6">
                    <h2 class="text-uppercase fw-bold section-title mb-3">Paket Groom</h2>
                    <div class="separator" style="width: 60px; height: 3px; background: var(--accent-color); margin: 10px 0 20px;"></div>

                    <ul class="feature-list text-start mb-4">
                        <li><i class="fas fa-check-circle"></i> Konsultasi</li>
                        <li><i class="fas fa-check-circle"></i> Haircut H-3</li>
                        <li><i class="fas fa-check-circle"></i> Treatment</li>
                        <li><i class="fas fa-check-circle"></i> Styling Hari H di lokasi</li>
                    </ul>

                    <div class="keunggulan-box p-4">
                        <h4 class="fw-bold mb-2 text-gold">Keunggulan</h4>
                        <ul class="feature-list text-start mb-0">
                            <li><i class="fas fa-car"></i> Tim datang ke hotel/rumah</li>
                            <li><i class="fas fa-bolt"></i> Produk tahan keringat & kamera</li>
                            <li><i class="fas fa-clock"></i> Rapi seharian</li>
                        </ul>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <h3 class="fw-bold text-uppercase mb-3 text-gold">Siap jadi groom paling ganteng?</h3>
                    <p class="lead text-cream" style="font-size: 1.05rem;">
                        Chat kami buat amankan tanggal nikah lo. Slot weekend terbatas.
                    </p>

                    <a href="https://wa.me/6282126982529" target="_blank" class="btn btn-gold btn-lg w-100 fw-bold my-3">
                        <i class="fab fa-whatsapp me-2"></i> Chat WhatsApp Sekarang
                    </a>

                    <hr class="gold-divider my-4">

                    <h4 class="fw-bold mb-2 text-cream">Kenapa Groom Pilih Jompi TimHairstylist?</h4>
                    <p class="text-muted-custom mb-3">Karena kami tau deg-degannya calon pengantin pria itu beda.</p>
                    <p class="text-muted-custom mb-3">Jompi TimHairstylist berawal dari banyaknya calon suami yang curhat: "Takut salah potong pas Deket hari H, bro." Akhirnya kami bikin layanan khusus Groom Prep.</p>
                    <p class="text-muted-custom mb-3">Di sini lo bukan cuma customer. Lo partner. Kita dengerin tema nikahan lo, liat referensi baju, baru saranin potongan yang nyambung.</p>
                    <p class="text-muted-custom mb-0">Hasilnya? lo tau karakter lo sebenarnya.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer-dark text-white pt-5 pb-3">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-4 mb-4">
                    <img src="{{ asset('image/logo.jpeg') }}" alt="Logo" class="footer-logo mb-3" style="width: 60px; height: 60px; object-fit: cover; border-radius: 50%;">
                    <h5 class="fw-bold text-gold mb-3">Jompi TimHairstylist</h5>
                    <p class="small text-muted-custom">
                        Layanan hairstyling profesional khusus pria untuk acara pernikahan. Buat pengantin pria Anda tampil percaya diri dan berkelas di hari bahagia.
                    </p>
                </div>

                <div class="col-md-4 mb-4">
                    <h5 class="fw-bold text-gold mb-3">Menu</h5>
                    <ul class="list-unstyled small">
                        <li class="mb-2"><a href="#tentang" class="footer-link"><i class="fas fa-angle-right text-gold me-1"></i> Tentang Kami</a></li>
                        <li class="mb-2"><a href="#paket" class="footer-link"><i class="fas fa-angle-right text-gold me-1"></i> Paket Layanan</a></li>
                        <li class="mb-2"><a href="#galeri" class="footer-link"><i class="fas fa-angle-right text-gold me-1"></i> Galeri</a></li>
                        <li class="mb-2"><a href="#kontak" class="footer-link"><i class="fas fa-angle-right text-gold me-1"></i> Kontak</a></li>
                    </ul>
                </div>

                <div class="col-md-4 mb-4">
                    <h5 class="fw-bold text-gold mb-3">Hubungi Kami</h5>
                    <ul class="list-unstyled small text-muted-custom">
                        <li class="mb-2"><i class="fas fa-map-marker-alt text-gold me-2"></i>Dome barbershop Jl. R. Ikik Wiradikarta No.16, Tasikmalaya</li>
                        <li class="mb-2"><i class="fas fa-phone text-gold me-2"></i><a href="tel:6282126982529" class="footer-link">+62 821-2698-2529</a></li>
                        <li class="mb-2"><i class="fab fa-instagram text-gold me-2"></i><a href="https://www.instagram.com/jompi_timhairstylist" target="_blank" class="footer-link">@jompi_timhairstylist</a></li>
                    </ul>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-12 text-center">
                    <h6 class="fw-bold text-gold mb-3">Ikuti Kami</h6>
                    <div class="d-flex justify-content-center gap-3">
                        <a href="https://wa.me/6282126982529" target="_blank" class="social-icon"><i class="fab fa-whatsapp"></i></a>
                        <a href="https://www.instagram.com/jompi_timhairstylist?utm_source=qr" target="_blank" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="https://facebook.com" target="_blank" class="social-icon"><i class="fab fa-facebook"></i></a>
                    </div>
                </div>
            </div>

            <hr style="border-color: rgba(212,175,55,0.3); margin-bottom: 1rem;">
            <div class="text-center py-2">
                <p class="small text-muted-custom mb-1">&copy; 2026 Jompi TimHairstylist. All rights reserved.</p>
                <p class="small text-muted-custom">Dibuat dengan <i class="fas fa-heart text-gold"></i> oleh Tim Profesional</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
<script>
window.addEventListener('scroll', function(){
    const navbar = document.querySelector('.navbar');
    if(window.scrollY > 50){
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});

const observer = new IntersectionObserver((entries)=>{
    entries.forEach((entry)=>{
        if(entry.isIntersecting){
            entry.target.classList.add('show-card');
        }
    });
},{ threshold:0.15 });

document.querySelectorAll('.pricing-card, .kontak-card, .gallery-item, .col-md-6 img').forEach((el)=>{
    observer.observe(el);
});

const showAllButton = document.getElementById('show-all-gallery');
if (showAllButton) {
    showAllButton.addEventListener('click', function() {
        document.querySelectorAll('.gallery-item-hidden').forEach((item) => {
            item.style.display = 'block';
        });
        showAllButton.style.display = 'none';
    });
}

const reveal = () => { document.body.style.opacity = '1'; };
window.addEventListener('DOMContentLoaded', reveal);
setTimeout(reveal, 1500);
</script>
</html>