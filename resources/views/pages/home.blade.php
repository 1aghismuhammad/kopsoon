<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/webp" href="{{ asset('images/logo.webp') }}">
    <link rel="shortcut icon" href="{{ asset('images/logo.webp') }}">
    @include('components.seo', [
        'title' => 'KOPSOON | Kopi Santan Instan Khas Blora',
        'description' => 'Nikmati KOPSOON, kopi santan instan khas Blora dengan rasa creamy Nusantara. Praktis diseduh panas atau dingin, cocok untuk nugas, kerja, dan santai.',
        'canonical' => 'https://kopsoon.aksivastudio.my.id/',
        'image' => 'images/hero.webp',
        'type' => 'website',
        'schemas' => [
            [
                '@context' => 'https://schema.org',
                '@type' => 'WebSite',
                '@id' => 'https://kopsoon.aksivastudio.my.id/#website',
                'url' => 'https://kopsoon.aksivastudio.my.id/',
                'name' => 'KOPSOON',
                'description' => 'Website resmi KOPSOON, kopi santan instan khas Blora.',
                'inLanguage' => 'id-ID',
                'publisher' => [
                    '@id' => 'https://kopsoon.aksivastudio.my.id/#organization',
                ],
            ],
        ],
    ])
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700;800&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/uvp.css') }}">
    <link rel="stylesheet" href="{{ asset('css/product-options.css') }}">
    <link rel="stylesheet" href="{{ asset('css/servings.css') }}">
    <link rel="stylesheet" href="{{ asset('css/promo-reseller.css') }}">
    <link rel="stylesheet" href="{{ asset('css/order-section.css') }}">
    <link rel="stylesheet" href="{{ asset('css/page-transition.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home-parallax.css') }}">
</head>
<body class="home-parallax">
    @include('components.page-transition')

    @include('components.navbar')

    <section class="hero-section" data-home-hero>
        <div class="hero-container container">
            
            <div class="hero-content" data-reveal>
                <h1 class="hero-title">Sensasi Kopi Santan Autentik Nusantara, <span class="highlight">Kini Dalam Genggaman!</span></h1>
                <p class="hero-description">Tinggalkan kopi instan yang monoton. <strong>KOPSOON</strong> memadukan kopi pilihan dan santan berkualitas—praktis, creamy, dan selalu siap menemani harimu.</p>
                <div class="hero-actions">
                    <a href="{{ route('product') }}" class="btn btn-primary">Jelajahi Produk</a>
                    <a href="{{ route('about') }}" class="btn btn-secondary">Cerita Kami</a>
                </div>
            </div>

            <div class="hero-image-container" data-reveal data-reveal-delay="120">
                <img src="{{ asset('images/gambarkopi.webp') }}" alt="KOPSOON kopi santan instan khas Blora dalam kemasan praktis" class="hero-image" fetchpriority="high" decoding="async">
            </div>

        </div>
    </section>

    <section class="uvp-section home-parallax-section" id="about">
        <div class="uvp-decoration-left" data-parallax data-parallax-speed="-34"></div>
        <div class="uvp-decoration-lines" data-parallax data-parallax-speed="28"></div>

        <div class="uvp-container">
            <div class="uvp-header uvp-header-card" data-reveal>
                <span class="uvp-eyebrow">Why Kopsoon</span>
                <h2 class="uvp-title">Kenapa Harus Kopsoon?</h2>
                <p class="uvp-description">
                    Kopi santan tradisional dikenal dengan rasa yang gurih, creamy, dan khas Nusantara.
                    Namun, cita rasa ini tidak selalu mudah ditemukan dalam bentuk yang praktis.
                    KOPSOON hadir sebagai inovasi kopi santan instan yang tetap membawa rasa autentik,
                    mudah disajikan, dan cocok dinikmati kapan saja.
                </p>
            </div>

            <div class="uvp-content uvp-content-card" data-reveal data-reveal-delay="120">
                <h3 class="uvp-subtitle">Nilai Jual (UVP)</h3>

                <div class="uvp-grid">
                    <div class="uvp-item">
                        <div class="uvp-check-icon"></div>
                        <h4>100% Autentik</h4>
                        <p>Racikan kopi santan khas Nusantara dengan karakter rasa yang tetap terasa original.</p>
                    </div>

                    <div class="uvp-item">
                        <div class="uvp-check-icon"></div>
                        <h4>Praktis</h4>
                        <p>Mudah diseduh dan dinikmati kapan saja, cocok untuk gaya hidup aktif sehari-hari.</p>
                    </div>

                    <div class="uvp-item">
                        <div class="uvp-check-icon"></div>
                        <h4>Terjangkau</h4>
                        <p>Memberikan pengalaman rasa premium dengan harga yang tetap ramah di kantong.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="product-options-section home-parallax-section" id="produk">
        <div class="product-options-decoration-top" data-parallax data-parallax-speed="-46"></div>
        <div class="product-options-decoration-left" data-parallax data-parallax-speed="38"></div>
        <div class="product-options-beans" data-parallax data-parallax-speed="-24"></div>

        <div class="product-options-container">
            <div class="product-options-content">
                <div class="product-options-text" data-reveal>
                    <h2 class="product-options-title">PILIHAN PAS UNTUK HARIMU</h2>

                    <div class="product-options-list">
                        <div class="product-option-item">
                            <h3>Sachet Satuan:</h3>
                            <p>Cocok untuk yang baru ingin mencoba rasa unik KOPSOON.</p>
                        </div>

                        <div class="product-option-item">
                            <h3>Paket Bundling (Best Seller):</h3>
                            <p>Lebih hemat untuk stok mingguan.</p>
                        </div>

                        <div class="product-option-item">
                            <h3>Box / Pack Keluarga:</h3>
                            <p>Pilihan tepat untuk dinikmati bersama teman atau keluarga.</p>
                        </div>
                    </div>
                </div>

                <div class="product-options-visual" data-reveal data-reveal-delay="120">
                    <img 
                        src="{{ asset('images/product-drink.webp') }}" 
                        alt="KOPSOON sachet dan minuman kopi santan instan" 
                        class="product-image product-image-top" data-parallax data-parallax-speed="-26"
                    >

                    <img 
                        src="{{ asset('images/product-box.webp') }}" 
                        alt="KOPSOON box kopi santan instan" 
                        class="product-image product-image-right" data-parallax data-parallax-speed="22"
                    >

                    <img 
                        src="{{ asset('images/product-pack.webp') }}" 
                        alt="KOPSOON paket keluarga kopi santan instan" 
                        class="product-image product-image-bottom" data-parallax data-parallax-speed="-16"
                    >
                </div>
            </div>
        </div>
    </section>

    <section class="serving-section home-parallax-section" id="serving">
        <div class="serving-container">
            <h2 class="serving-title" data-reveal>NIKMATI SESUAI GAYAMU</h2>

            <div class="serving-grid">
                <div class="serving-card" data-reveal>
                    <h3 class="serving-card-title">Penyajian Panas (Hot)</h3>

                    <div class="serving-image-wrap">
                        <img 
                            src="{{ asset('images/serving-hot.webp') }}" 
                            alt="Penyajian panas KOPSOON kopi santan instan" 
                            class="serving-image"
                        >
                    </div>

                    <ul class="serving-list">
                        <li>Tuang 1 sachet KOPSOON ke dalam cangkir.</li>
                        <li>Tambahkan 150ml air panas.</li>
                        <li>Aduk rata dan nikmati aroma khas.</li>
                    </ul>
                </div>

                <div class="serving-card" data-reveal data-reveal-delay="140">
                    <h3 class="serving-card-title">Penyajian Dingin (Ice Kopi Santan)</h3>

                    <div class="serving-image-wrap">
                        <img 
                            src="{{ asset('images/serving-ice.webp') }}" 
                            alt="Penyajian dingin Kopsoon" 
                            class="serving-image"
                        >
                    </div>

                    <ul class="serving-list">
                        <li>Tuang 1 sachet KOPSOON, seduh dengan sedikit air panas (50ml) untuk melarutkan.</li>
                        <li>Tambahkan air dingin dan es batu secukupnya.</li>
                        <li>Siap menyegarkan harimu!</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="promo-reseller-section home-parallax-section" id="reseller">
        <div class="promo-decoration promo-decoration-left" data-parallax data-parallax-speed="36"></div>
        <div class="promo-decoration promo-decoration-top" data-parallax data-parallax-speed="-40"></div>
        <div class="promo-decoration promo-decoration-bottom" data-parallax data-parallax-speed="24"></div>

        <div class="promo-reseller-container">
            <h2 class="promo-reseller-title" data-reveal>SPESIAL UNTUKMU & PELUANG KEMITRAAN</h2>

            <div class="promo-reseller-list">
                <div class="promo-reseller-card" data-reveal>
                    <div class="promo-reseller-text">
                        <h3>Promo Mahasiswa: Diskon Pembelian Pertama!” atau “Klaim Voucher Buy 1 Get 1</h3>
                    </div>

                    <a href="{{ route('contact') }}" class="promo-reseller-btn">
                        GET YOUR PROMO HERE
                    </a>
                </div>

                <div class="promo-reseller-card" data-reveal data-reveal-delay="120">
                    <div class="promo-reseller-text">
                        <h3>Tertarik mendapat penghasilan tambahan? Bergabunglah menjadi mitra/reseller KOPSOON.</h3>
                        <p>
                            Keuntungan: Harga khusus distributor, materi promosi (foto/video untuk TikTok/IG)
                            sudah disiapkan.
                        </p>
                    </div>

                    <a href="{{ route('contact') }}" class="promo-reseller-btn">
                        DAFTAR JADI RESELLER
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="order-section home-parallax-section" id="contact">
        <div class="order-decoration-circle" data-parallax data-parallax-speed="-42"></div>
        <div class="order-decoration-splash" data-parallax data-parallax-speed="34"></div>
        <div class="order-decoration-beans" data-parallax data-parallax-speed="-22"></div>

        <div class="order-container">
            <div class="order-header" data-reveal>
                <span class="order-eyebrow">Order & Connect</span>
                <h2 class="order-title">DAPATKAN KOPSOON SEKARANG!</h2>
                <p class="order-description">Pilih varian favoritmu dan nikmati pengalaman kopi santan khas Nusantara dengan cara yang paling praktis.</p>
            </div>

            <div class="order-product-grid">
                <div class="order-product-card" data-reveal>
                    <div class="order-image-box">
                        <img 
                            src="{{ asset('images/product-drink.webp') }}" 
                            alt="KOPSOON sachet satuan kopi santan instan"
                            class="order-product-image"
                        >
                    </div>
                    <div class="order-product-info">
                        <h3>Sachet Satuan</h3>
                        <p>Pas untuk coba pertama kali dan teman ngopi harianmu.</p>
                    </div>
                    <a href="{{ route('contact') }}" class="order-btn">ORDER NOW</a>
                </div>

                <div class="order-product-card" data-reveal data-reveal-delay="100">
                    <div class="order-image-box">
                        <img 
                            src="{{ asset('images/product-pack.webp') }}" 
                            alt="Paket bundling KOPSOON kopi santan instan"
                            class="order-product-image"
                        >
                    </div>
                    <div class="order-product-info">
                        <h3>Paket Bundling</h3>
                        <p>Best seller untuk stok mingguan yang lebih hemat.</p>
                    </div>
                    <a href="{{ route('contact') }}" class="order-btn">ORDER NOW</a>
                </div>

                <div class="order-product-card" data-reveal data-reveal-delay="200">
                    <div class="order-image-box">
                        <img 
                            src="{{ asset('images/product-box.webp') }}" 
                            alt="Box keluarga KOPSOON kopi santan instan"
                            class="order-product-image"
                        >
                    </div>
                    <div class="order-product-info">
                        <h3>Box Keluarga</h3>
                        <p>Pilihan praktis untuk rumah, kantor, atau kumpul bareng.</p>
                    </div>
                    <a href="{{ route('contact') }}" class="order-btn">ORDER NOW</a>
                </div>
            </div>

            <div class="order-social" data-reveal>
                <div class="order-social-card">
                    <span class="order-social-label">Stay Connected</span>
                    <h3>Ikuti kami untuk update promo dan konten FYP seru!</h3>

                    <a href="https://tiktok.com/@KOPSOON" target="_blank" rel="noopener noreferrer" class="order-tiktok-link">
                        <span class="order-tiktok-icon">♪</span>
                        <span>tiktokkopsoon</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    @include('components.footer')

    <script src="{{ asset('js/page-transition.js') }}"></script>
    <script src="{{ asset('js/home-parallax.js') }}"></script>
</body>
</html>