<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KOPSOON - Kopi Santan Instan Khas Blora</title>
    
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700;800&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/uvp.css') }}">
    <link rel="stylesheet" href="{{ asset('css/product-options.css') }}">
    <link rel="stylesheet" href="{{ asset('css/servings.css') }}">
    <link rel="stylesheet" href="{{ asset('css/promo-reseller.css') }}">
    <link rel="stylesheet" href="{{ asset('css/order-section.css') }}">
</head>
<body>

    @include('components.navbar')

    <section class="hero-section">
        <div class="hero-container container">
            
            <div class="hero-content">
                <h1 class="hero-title">Sensasi Kopi Santan Autentik Nusantara, <span class="highlight">Kini Dalam Genggaman!</span></h1>
                <p class="hero-description">Tinggalkan kopi instan yang monoton. <strong>KOPSOON</strong> memadukan kopi pilihan dan santan berkualitas—praktis, creamy, dan selalu siap menemani harimu.</p>
                <div class="hero-actions">
                    <a href="{{ route('product') }}" class="btn btn-primary">Jelajahi Produk</a>
                    <a href="#about" class="btn btn-secondary">Cerita Kami</a>
                </div>
            </div>

            <div class="hero-image-container">
                <img src="{{ asset('images/gambarkopi.png') }}" alt="KOPSOON Kopi Santan Instan" class="hero-image">
            </div>

        </div>
    </section>

    <section class="uvp-section" id="about">
        <div class="uvp-decoration-left"></div>
        <div class="uvp-decoration-lines"></div>

        <div class="uvp-container">
            <div class="uvp-header">
                <h2 class="uvp-title">Kenapa Harus Kopsoon?</h2>
                <p class="uvp-description">
                    Kopi santan tradisional dikenal dengan rasa yang gurih, creamy, dan khas Nusantara.
                    Namun, cita rasa ini tidak selalu mudah ditemukan dalam bentuk yang praktis.
                    KOPSOON hadir sebagai inovasi kopi santan instan yang tetap membawa rasa autentik,
                    mudah disajikan, dan cocok dinikmati kapan saja.
                </p>
            </div>

            <div class="uvp-content">
                <h3 class="uvp-subtitle">Nilai Jual (UVP)</h3>

                <div class="uvp-grid">
                    <div class="uvp-item">
                        <div class="uvp-check-icon"></div>
                        <h4>100% Autentik</h4>
                    </div>

                    <div class="uvp-item">
                        <div class="uvp-check-icon"></div>
                        <h4>Praktis</h4>
                    </div>

                    <div class="uvp-item">
                        <div class="uvp-check-icon"></div>
                        <h4>Terjangkau</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="product-options-section" id="produk">
        <div class="product-options-decoration-top"></div>
        <div class="product-options-decoration-left"></div>
        <div class="product-options-beans"></div>

        <div class="product-options-container">
            <div class="product-options-content">
                <div class="product-options-text">
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

                <div class="product-options-visual">
                    <img 
                        src="{{ asset('images/product-drink.png') }}" 
                        alt="Kopsoon sachet dan minuman" 
                        class="product-image product-image-top"
                    >

                    <img 
                        src="{{ asset('images/product-box.png') }}" 
                        alt="Kopsoon box" 
                        class="product-image product-image-right"
                    >

                    <img 
                        src="{{ asset('images/product-pack.png') }}" 
                        alt="Kopsoon pack keluarga" 
                        class="product-image product-image-bottom"
                    >
                </div>
            </div>
        </div>
    </section>

    <section class="serving-section" id="serving">
        <div class="serving-container">
            <h2 class="serving-title">NIKMATI SESUAI GAYAMU</h2>

            <div class="serving-grid">
                <div class="serving-card">
                    <h3 class="serving-card-title">Penyajian Panas (Hot)</h3>

                    <div class="serving-image-wrap">
                        <img 
                            src="{{ asset('images/serving-hot.png') }}" 
                            alt="Penyajian panas Kopsoon" 
                            class="serving-image"
                        >
                    </div>

                    <ul class="serving-list">
                        <li>Tuang 1 sachet KOPSOON ke dalam cangkir.</li>
                        <li>Tambahkan 150ml air panas.</li>
                        <li>Aduk rata dan nikmati aroma khas.</li>
                    </ul>
                </div>

                <div class="serving-card">
                    <h3 class="serving-card-title">Penyajian Dingin (Ice Kopi Santan)</h3>

                    <div class="serving-image-wrap">
                        <img 
                            src="{{ asset('images/serving-ice.png') }}" 
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

    <section class="promo-reseller-section" id="reseller">
        <div class="promo-decoration promo-decoration-left"></div>
        <div class="promo-decoration promo-decoration-top"></div>
        <div class="promo-decoration promo-decoration-bottom"></div>

        <div class="promo-reseller-container">
            <h2 class="promo-reseller-title">SPESIAL UNTUKMU & PELUANG KEMITRAAN</h2>

            <div class="promo-reseller-list">
                <div class="promo-reseller-card">
                    <div class="promo-reseller-text">
                        <h3>Promo Mahasiswa: Diskon Pembelian Pertama!” atau “Klaim Voucher Buy 1 Get 1</h3>
                    </div>

                    <a href="#contact" class="promo-reseller-btn">
                        GET YOUR PROMO HERE
                    </a>
                </div>

                <div class="promo-reseller-card">
                    <div class="promo-reseller-text">
                        <h3>Tertarik mendapat penghasilan tambahan? Bergabunglah menjadi mitra/reseller KOPSOON.</h3>
                        <p>
                            Keuntungan: Harga khusus distributor, materi promosi (foto/video untuk TikTok/IG)
                            sudah disiapkan.
                        </p>
                    </div>

                    <a href="#contact" class="promo-reseller-btn">
                        DAFTAR JADI RESELLER
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="order-section" id="contact">
        <div class="order-decoration-circle"></div>
        <div class="order-decoration-splash"></div>
        <div class="order-decoration-beans"></div>

        <div class="order-container">
            <h2 class="order-title">DAPATKAN KOPSOON SEKARANG!</h2>

            <div class="order-product-grid">
                <div class="order-product-card">
                    <div class="order-image-box">
                        <img 
                            src="{{ asset('images/order-sachet.jpg') }}" 
                            alt="Kopsoon Sachet Satuan"
                            class="order-product-image"
                        >
                    </div>

                    <a href="#" class="order-btn">ORDER NOW</a>
                </div>

                <div class="order-product-card">
                    <div class="order-image-box">
                        <img 
                            src="{{ asset('images/order-bundling.jpg') }}" 
                            alt="Paket Bundling Kopsoon"
                            class="order-product-image"
                        >
                    </div>

                    <a href="#" class="order-btn">ORDER NOW</a>
                </div>

                <div class="order-product-card">
                    <div class="order-image-box">
                        <img 
                            src="{{ asset('images/order-box.jpg') }}" 
                            alt="Box Keluarga Kopsoon"
                            class="order-product-image"
                        >
                    </div>

                    <a href="#" class="order-btn">ORDER NOW</a>
                </div>
            </div>

            <div class="order-social">
                <h3>Ikuti kami untuk update promo dan konten FYP seru!</h3>

                <a href="#" class="order-tiktok-link">
                    <span class="order-tiktok-icon">♪</span>
                    <span>tiktokkopsoon</span>
                </a>
            </div>
        </div>
    </section>

    @include('components.footer')

</body>
</html>