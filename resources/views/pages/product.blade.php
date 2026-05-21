<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk KOPSOON - Kopi Santan Instan Khas Blora</title>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/product-page.css') }}">
    <link rel="stylesheet" href="{{ asset('css/page-transition.css') }}">
    <link rel="stylesheet" href="{{ asset('css/kopsoon-text-palette.css') }}">
</head>
<body class="product-page-body">
    @include('components.page-transition')

    @include('components.navbar')

    <main>
        <section class="product-hero" aria-labelledby="product-hero-title">
            <div class="product-hero-cream-wave" aria-hidden="true"></div>
            <div class="product-hero-splash" aria-hidden="true"></div>
            <div class="product-hero-beans" aria-hidden="true"></div>
            <div class="product-hero-ring" aria-hidden="true"></div>

            <div class="product-hero-container">
                <div class="product-hero-copy reveal-up">
                    <span class="product-eyebrow">KOPSOON Product Line</span>
                    <h1 id="product-hero-title">Jelajahi Produk Kami</h1>
                    <p>
                        Pilih format KOPSOON sesuai kebutuhanmu: coba satu sachet, stok mingguan,
                        box bulanan, sampai paket mitra untuk mulai jualan.
                    </p>
                </div>

                <div class="product-hero-collage" aria-label="Kolase produk KOPSOON">
                    <img src="{{ asset('images/product-drink.png') }}" alt="KOPSOON sachet dan es kopi santan" class="hero-collage-img hero-collage-img-1">
                    <img src="{{ asset('images/product-pack.png') }}" alt="Paket bundling KOPSOON" class="hero-collage-img hero-collage-img-2">
                    <img src="{{ asset('images/product-box.png') }}" alt="Box bulanan KOPSOON" class="hero-collage-img hero-collage-img-3">
                    <img src="{{ asset('images/product-pack.png') }}" alt="Paket mitra KOPSOON" class="hero-collage-img hero-collage-img-4">
                </div>
            </div>
        </section>

        <section class="product-showcase" id="product-showcase" aria-labelledby="product-showcase-title" data-scroll-showcase>
            <div class="showcase-stage" data-product-slider>
                <div class="showcase-bg-splash" aria-hidden="true"></div>
                <div class="showcase-bg-curve" aria-hidden="true"></div>
                <article class="product-slide is-active" data-slide="0">
                    <div class="showcase-image-area">
                        <div class="showcase-image-frame">
                            <img src="{{ asset('images/product-drink.png') }}" alt="KOPSOON Taster Sachet Satuan" class="showcase-image">
                        </div>
                    </div>

                    <div class="showcase-content">
                        <span class="showcase-kicker">Coba dulu, baru jatuh hati</span>
                        <h2 id="product-showcase-title">KOPSOON Taster (Sachet Satuan)</h2>
                        <p>
                            Cocok untuk pembeli pertama yang ingin mencicipi rasa kopi santan khas Blora
                            tanpa harus membeli banyak. Praktis dibawa ke kampus, kantor, atau kos.
                        </p>
                        <a href="{{ route('contact') }}" class="showcase-cta">Pesan Sekarang</a>
                    </div>
                </article>

                <article class="product-slide" data-slide="1">
                    <div class="showcase-image-area">
                        <div class="showcase-image-frame">
                            <img src="{{ asset('images/product-pack.png') }}" alt="KOPSOON Paket Nugas Bundling 5 Sachet" class="showcase-image">
                        </div>
                    </div>

                    <div class="showcase-content">
                        <span class="showcase-kicker">Best seller untuk stok mingguan</span>
                        <h2>KOPSOON Paket Nugas (Bundling 5 Sachet)</h2>
                        <p>
                            Paket hemat untuk menemani aktivitas padat, mulai dari nugas, kerja lembur,
                            sampai santai di akhir pekan. Lebih efisien daripada beli satuan berulang.
                        </p>
                        <a href="{{ route('contact') }}" class="showcase-cta">Ambil Paket Ini</a>
                    </div>
                </article>

                <article class="product-slide" data-slide="2">
                    <div class="showcase-image-area">
                        <div class="showcase-image-frame">
                            <img src="{{ asset('images/product-box.png') }}" alt="KOPSOON Box Bulanan Isi 20 Sachet" class="showcase-image">
                        </div>
                    </div>

                    <div class="showcase-content">
                        <span class="showcase-kicker">Stok aman sebulan</span>
                        <h2>KOPSOON Box Bulanan (Isi 20 Sachet)</h2>
                        <p>
                            Pilihan terbaik untuk dinikmati kapan saja di kos, rumah, atau kantor.
                            Cocok juga untuk disuguhkan saat kumpul bersama teman dan keluarga.
                        </p>
                        <a href="{{ route('contact') }}" class="showcase-cta">Cek Stok Box</a>
                    </div>
                </article>

                <article class="product-slide" data-slide="3">
                    <div class="showcase-image-area">
                        <div class="showcase-image-frame">
                            <img src="{{ asset('images/product-pack.png') }}" alt="Paket Mitra atau Reseller Starter Kit KOPSOON" class="showcase-image">
                        </div>
                    </div>

                    <div class="showcase-content">
                        <span class="showcase-kicker">Mulai jualan dengan paket siap promosi</span>
                        <h2>Paket Mitra / Reseller Starter Kit</h2>
                        <p>
                            Dirancang untuk calon reseller yang ingin mulai menjual KOPSOON dengan stok awal,
                            materi promosi, dan format produk yang mudah dikenalkan ke pembeli baru.
                        </p>
                        <a href="{{ route('reseller') }}" class="showcase-cta">Lihat Program Reseller</a>
                    </div>
                </article>

            </div>
        </section>

        <section class="product-list-section" aria-labelledby="product-list-title">
            <div class="product-list-container">
                <div class="product-list-header reveal-up">
                    <span class="product-eyebrow">Varian Produk</span>
                    <h2 id="product-list-title">Pilih sesuai kebutuhan konsumsi atau jualan</h2>
                </div>

                <div class="product-card-grid">
                    <article class="product-card reveal-up">
                        <img src="{{ asset('images/product-drink.png') }}" alt="KOPSOON Sachet Satuan" class="product-card-image">
                        <div class="product-card-body">
                            <h3>Sachet Satuan</h3>
                            <p>Untuk coba rasa, pembelian cepat, dan konsumsi harian yang praktis.</p>
                        </div>
                    </article>

                    <article class="product-card reveal-up">
                        <img src="{{ asset('images/product-pack.png') }}" alt="KOPSOON Bundling 5 Sachet" class="product-card-image">
                        <div class="product-card-body">
                            <h3>Bundling 5 Sachet</h3>
                            <p>Untuk stok mingguan, lebih hemat, dan cocok untuk mahasiswa atau pekerja.</p>
                        </div>
                    </article>

                    <article class="product-card reveal-up">
                        <img src="{{ asset('images/product-box.png') }}" alt="KOPSOON Box Bulanan" class="product-card-image">
                        <div class="product-card-body">
                            <h3>Box Bulanan</h3>
                            <p>Untuk stok rumah, kantor, kos, atau konsumsi bersama keluarga.</p>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="product-contact-strip" id="contact-product">
            <div class="product-contact-container reveal-up">
                <div>
                    <span class="product-eyebrow">Order & Kemitraan</span>
                    <h2>Mau beli atau mulai jadi reseller?</h2>
                    <p>Hubungi tim KOPSOON untuk info stok, harga paket, dan program reseller.</p>
                </div>

                <div class="product-contact-actions">
                    <a href="{{ route('contact') }}" class="btn btn-primary">Lihat Kontak</a>
                    <a href="{{ route('reseller') }}" class="btn btn-secondary">Lihat Reseller</a>
                </div>
            </div>
        </section>
    </main>

    @include('components.footer')

    <script src="{{ asset('js/product-page.js') }}"></script>
    <script src="{{ asset('js/page-transition.js') }}"></script>
</body>
</html>
