<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serving Method KOPSOON - Cara Menikmati Kopi Santan</title>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/serving-page.css') }}">
    <link rel="stylesheet" href="{{ asset('css/serving-hero.css') }}">
    <link rel="stylesheet" href="{{ asset('css/serving-methods.css') }}">
    <link rel="stylesheet" href="{{ asset('css/serving-hacks.css') }}">
    <link rel="stylesheet" href="{{ asset('css/serving-parallax.css') }}">
    <link rel="stylesheet" href="{{ asset('css/page-transition.css') }}">
</head>
<body class="serving-page serving-parallax">
    @include('components.page-transition')

    @include('components.navbar')

    <main>
        <section class="serving-hero-page-section" data-serving-hero>
            <div class="serving-curve serving-curve-hero" data-serving-parallax data-serving-speed="-34" aria-hidden="true"></div>
            <div class="serving-bean serving-bean-left" data-serving-parallax data-serving-speed="24" aria-hidden="true"></div>
            <div class="serving-hero-container container">
                <div class="serving-hero-content" data-serving-reveal>
                    <h1>CARA ASIK NIKMATIN KOPSOON!</h1>
                    <p>
                        Seduh hangat untuk booster fokus saat nugas, atau bikin versi es buat ngademin hari yang panas.
                        Tinggal pilih gaya minum favoritmu!
                    </p>
                </div>
            </div>
        </section>

        <section class="serving-method-section serving-method-hot serving-parallax-section">
            <div class="serving-method-container container serving-method-grid">
                <div class="serving-method-content" data-serving-reveal>
                    <h2>KOPSOON Hangat <span>(Classic &amp; Comforting)</span></h2>
                    <p class="serving-method-lead">
                        Pilihan tepat buat nemenin morning routine atau begadang ngerjain deadline.
                        Aroma gurih santannya langsung bikin rileks.
                    </p>

                    <ol class="serving-method-list">
                        <li><strong>Tuang:</strong> Buka 1 sachet KOPSOON dan tuang ke dalam cangkir favoritmu.</li>
                        <li><strong>Seduh:</strong> Tambahkan 150ml air panas, suhu ideal 85–90°C agar santan tidak pecah.</li>
                        <li><strong>Aduk &amp; Nikmati:</strong> Aduk hingga larut sempurna. Nikmati sensasi creamy dan gurih khas Nusantara!</li>
                    </ol>
                </div>

                <div class="serving-method-image-wrap" data-serving-reveal data-serving-reveal-delay="140" data-serving-parallax data-serving-speed="-24">
                    <img src="{{ asset('images/serving-hot.png') }}" alt="KOPSOON hangat" class="serving-method-image">
                </div>
            </div>
        </section>

        <section class="serving-method-section serving-method-ice serving-parallax-section">
            <div class="serving-method-container container serving-method-grid serving-method-grid-reverse">
                <div class="serving-method-image-wrap" data-serving-reveal data-serving-parallax data-serving-speed="22">
                    <img src="{{ asset('images/serving-ice.png') }}" alt="Es KOPSOON dingin" class="serving-method-image">
                </div>

                <div class="serving-method-content serving-method-content-dark" data-serving-reveal data-serving-reveal-delay="140">
                    <h2>Es KOPSOON <span>(Chill &amp; Refreshing)</span></h2>
                    <p class="serving-method-lead">
                        Cuaca lagi panas terik? Bikin versi es aja! Sensasi dingin berpadu dengan gurihnya santan
                        dijamin bikin melek dan segar maksimal.
                    </p>

                    <ol class="serving-method-list">
                        <li><strong>Tuang &amp; Larutkan:</strong> Masukkan 1 sachet KOPSOON ke dalam gelas, tambahkan sedikit air panas sekitar 50ml, lalu aduk sampai larut.</li>
                        <li><strong>Dinginkan:</strong> Tambahkan 100ml air dingin.</li>
                        <li><strong>Tambahkan Es:</strong> Masukkan es batu secukupnya. Es Kopi Santan ala kafe siap dinikmati!</li>
                    </ol>
                </div>
            </div>
        </section>

        <section class="serving-hacks-section serving-parallax-section">
            <div class="serving-curve serving-curve-hacks" data-serving-parallax data-serving-speed="-28" aria-hidden="true"></div>
            <div class="serving-bean serving-bean-hacks" data-serving-parallax data-serving-speed="24" aria-hidden="true"></div>
            <div class="serving-beans-outline serving-beans-outline-right" data-serving-parallax data-serving-speed="18" aria-hidden="true"></div>

            <div class="serving-hacks-container container">
                <div class="serving-hacks-header" data-serving-reveal>
                    <h2>KOPSOON Hacks Ala Cafe</h2>
                    <p>Sesuain dengan selera Gen Zmu itu</p>
                </div>

                <div class="serving-hacks-grid">
                    <article class="serving-hack-card" data-serving-reveal data-serving-parallax data-serving-speed="-14">
                        <div class="serving-hack-image-box">
                            <img src="{{ asset('images/gambarkopi.png') }}" alt="KOPSOON double shot" class="serving-hack-image">
                        </div>
                        <h3>Double Shot:</h3>
                        <p>Suka kopi yang lebih strong? Gunakan 2 sachet KOPSOON dengan takaran air 200ml.</p>
                    </article>

                    <article class="serving-hack-card" data-serving-reveal data-serving-reveal-delay="120" data-serving-parallax data-serving-speed="16">
                        <div class="serving-hack-image-box">
                            <img src="{{ asset('images/serving-ice.png') }}" alt="KOPSOON ekstra creamy" class="serving-hack-image">
                        </div>
                        <h3>Extra Creamy:</h3>
                        <p>Tambahkan 2 sendok makan susu evaporasi ke dalam racikan es KOPSOON-mu.</p>
                    </article>

                    <article class="serving-hack-card" data-serving-reveal data-serving-reveal-delay="240" data-serving-parallax data-serving-speed="-14">
                        <div class="serving-hack-image-box">
                            <img src="{{ asset('images/serving-hot.png') }}" alt="KOPSOON foamy style" class="serving-hack-image">
                        </div>
                        <h3>Foamy Style:</h3>
                        <p>Aduk menggunakan mini milk frother selama 10 detik biar kopimu punya foam tebal di atasnya!</p>
                    </article>
                </div>
            </div>
        </section>
    </main>

    @include('components.footer')

    <script src="{{ asset('js/page-transition.js') }}"></script>
    <script src="{{ asset('js/serving-parallax.js') }}"></script>
</body>
</html>
