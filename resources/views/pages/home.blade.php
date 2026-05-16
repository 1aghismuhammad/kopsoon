<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KOPSOON - Kopi Santan Instan Khas Blora</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>

    @include('components.navbar')

    <section class="hero-section">
        <div class="hero-container container">
            <div class="hero-content">
                <h1 class="hero-title">Kehangatan Kopi Santan Khas Blora, <span class="highlight">Langsung di Tanganmu</span>.</h1>
                <p class="hero-description">Nikmati perpaduan unik kopi premium dan kelembutan santan segar. Aroma khas, rasa otentik. Bikin harimu lebih cozy, dimana saja, kapan saja!</p>
                <div class="hero-actions">
                    <a href="#produk" class="btn btn-primary">Jelajahi Produk</a>
                    <a href="#about" class="btn btn-secondary">Cerita Kami</a>
                </div>
            </div>
            <div class="hero-image-container">
                <img src="{{ asset('images/hero-product.png') }}" alt="KOPSOON Kopi Santan Instan" class="hero-image">
            </div>
        </div>
    </section>

    @include('components.footer')

</body>
</html>