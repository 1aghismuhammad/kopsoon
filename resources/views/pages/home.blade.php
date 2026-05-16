<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KOPSOON - Kopi Santan Instan Khas Blora</title>
    
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
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

    @include('components.footer')

</body>
</html>