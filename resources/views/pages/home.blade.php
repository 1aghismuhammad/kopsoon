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
</head>
<body>

    @include('components.navbar')

    <section class="hero-section">
        <div class="hero-container container">
            
            <div class="hero-content">
                <h1 class="hero-title">Sensasi Kopi Santan Autentik Nusantara, <span class="highlight">Kini Dalam Genggaman!</span></h1>
                <p class="hero-description">Tinggalkan kopi instan yang monoton. <strong>KOPSOON</strong> memadukan kopi pilihan dan santan berkualitas—praktis, creamy, dan selalu siap menemani harimu.</p>
                <div class="hero-actions">
                    <a href="#produk" class="btn btn-primary">Jelajahi Produk</a>
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

    @include('components.footer')

</body>
</html>