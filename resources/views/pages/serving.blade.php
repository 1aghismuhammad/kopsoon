<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/webp" href="{{ asset('images/icon-kopsoon.webp') }}">
    <link rel="shortcut icon" href="{{ asset('images/icon-kopsoon.webp') }}">
    @include('components.seo', [
        'title' => 'Cara Menyeduh KOPSOON | Kopi Santan Panas & Es Kopi Santan',
        'description' => 'Pelajari cara menyeduh KOPSOON panas dan dingin, lengkap dengan tips racikan creamy ala kafe untuk menikmati kopi santan instan khas Blora.',
        'canonical' => 'https://kopsoon.aksivastudio.my.id/serving',
        'image' => 'images/serving-hot.webp',
        'type' => 'article',
        'schemas' => [
            [
                '@context' => 'https://schema.org',
                '@type' => 'WebPage',
                '@id' => 'https://kopsoon.aksivastudio.my.id/serving#webpage',
                'url' => 'https://kopsoon.aksivastudio.my.id/serving',
                'name' => 'Cara Menyeduh KOPSOON',
                'description' => 'Panduan menyeduh KOPSOON panas dan dingin untuk menikmati kopi santan instan khas Blora.',
                'inLanguage' => 'id-ID',
            ],
            [
                '@context' => 'https://schema.org',
                '@type' => 'HowTo',
                '@id' => 'https://kopsoon.aksivastudio.my.id/serving#howto-hot',
                'name' => 'Cara menyeduh KOPSOON hangat',
                'description' => 'Langkah sederhana menyeduh KOPSOON hangat.',
                'totalTime' => 'PT3M',
                'step' => [
                    [
                        '@type' => 'HowToStep',
                        'name' => 'Tuang',
                        'text' => 'Buka satu sachet KOPSOON dan tuang ke dalam cangkir.',
                    ],
                    [
                        '@type' => 'HowToStep',
                        'name' => 'Seduh',
                        'text' => 'Tambahkan 150 ml air panas dengan suhu ideal sekitar 85 sampai 90 derajat Celsius.',
                    ],
                    [
                        '@type' => 'HowToStep',
                        'name' => 'Aduk dan nikmati',
                        'text' => 'Aduk hingga larut sempurna lalu nikmati kopi santan instan KOPSOON.',
                    ],
                ],
            ],
            [
                '@context' => 'https://schema.org',
                '@type' => 'BreadcrumbList',
                'itemListElement' => [
                    [
                        '@type' => 'ListItem',
                        'position' => 1,
                        'name' => 'Home',
                        'item' => 'https://kopsoon.aksivastudio.my.id/',
                    ],
                    [
                        '@type' => 'ListItem',
                        'position' => 2,
                        'name' => 'Cara Penyajian',
                        'item' => 'https://kopsoon.aksivastudio.my.id/serving',
                    ],
                ],
            ],
        ],
    ])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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
        <section class="serving-hero-page-section" data-serving-hero aria-labelledby="serving-hero-title">
            <div class="serving-curve serving-curve-hero" data-serving-parallax data-serving-speed="-34" aria-hidden="true"></div>
            <div class="serving-bean serving-bean-left" data-serving-parallax data-serving-speed="24" aria-hidden="true"></div>
            <div class="serving-beans-outline serving-beans-hero" data-serving-parallax data-serving-speed="18" aria-hidden="true"></div>

            <div class="serving-hero-container container">
                <div class="serving-hero-content" data-serving-reveal>
                    <span class="serving-hero-eyebrow">KOPSOON Serving</span>
                    <h1 id="serving-hero-title">Cara Asik Nikmatin KOPSOON!</h1>
                    <p>
                        Seduh hangat untuk booster fokus saat nugas, atau bikin versi es buat ngademin hari yang panas.
                        Tinggal pilih gaya minum favoritmu!
                    </p>
                </div>
            </div>
        </section>

        <section class="serving-method-section serving-method-hot serving-parallax-section serving-method-visual">
            <div class="serving-method-orbit serving-method-orbit-hot" data-serving-parallax data-serving-speed="-16" aria-hidden="true"></div>
            <div class="serving-method-glow serving-method-glow-hot" data-serving-parallax data-serving-speed="20" aria-hidden="true"></div>

            <div class="serving-method-container container serving-method-grid">
                <div class="serving-method-content serving-method-card serving-glass-panel" data-serving-reveal>
                    <span class="serving-method-badge">Penyajian Panas (Hot)</span>
                    <h2>KOPSOON Hangat</h2>
                    <p class="serving-method-lead">
                        Cocok buat morning routine, teman nugas, atau momen santai saat butuh rasa kopi yang creamy dan nyaman.
                    </p>

                    <ol class="serving-method-list">
                        <li>
                            <div class="serving-method-step-copy">
                                <strong>Tuang:</strong>
                                <span>Buka 1 sachet KOPSOON dan tuang ke dalam cangkir favoritmu.</span>
                            </div>
                        </li>
                        <li>
                            <div class="serving-method-step-copy">
                                <strong>Seduh:</strong>
                                <span>Tambahkan 150ml air panas. Suhu ideal 85–90°C agar rasa santannya tetap halus.</span>
                            </div>
                        </li>
                        <li>
                            <div class="serving-method-step-copy">
                                <strong>Aduk &amp; Nikmati:</strong>
                                <span>Aduk hingga larut sempurna, lalu nikmati aroma kopi santan khas Nusantara.</span>
                            </div>
                        </li>
                    </ol>

                    <div class="serving-method-note">
                        <span>Best moment</span>
                        <strong>Pagi hari, kerja fokus, atau hujan sore.</strong>
                    </div>
                </div>

                <div class="serving-method-image-wrap serving-photo-frame serving-photo-frame-hot" data-serving-reveal data-serving-reveal-delay="140" data-serving-parallax data-serving-speed="-24">
                    <img src="{{ asset('images/serving-hot.webp') }}" alt="KOPSOON kopi santan instan disajikan hangat" class="serving-method-image">
                </div>
            </div>
        </section>

        <section class="serving-method-section serving-method-ice serving-parallax-section serving-method-visual">
            <div class="serving-method-orbit serving-method-orbit-ice" data-serving-parallax data-serving-speed="14" aria-hidden="true"></div>
            <div class="serving-method-glow serving-method-glow-ice" data-serving-parallax data-serving-speed="-18" aria-hidden="true"></div>

            <div class="serving-method-container container serving-method-grid serving-method-grid-reverse">
                <div class="serving-method-image-wrap serving-photo-frame serving-photo-frame-ice" data-serving-reveal data-serving-parallax data-serving-speed="22">
                    <img src="{{ asset('images/serving-ice.webp') }}" alt="Es KOPSOON kopi santan instan disajikan dingin" class="serving-method-image">
                </div>

                <div class="serving-method-content serving-method-content-dark serving-method-card serving-glass-panel" data-serving-reveal data-serving-reveal-delay="140">
                    <span class="serving-method-badge">Penyajian Dingin (Ice Kopi Santan)</span>
                    <h2>Es KOPSOON</h2>
                    <p class="serving-method-lead">
                        Buat hari yang panas, versi dingin ini bikin rasa kopi santan terasa lebih segar, ringan, dan tetap creamy.
                    </p>

                    <ol class="serving-method-list">
                        <li>
                            <div class="serving-method-step-copy">
                                <strong>Larutkan:</strong>
                                <span>Masukkan 1 sachet KOPSOON, lalu tambahkan sedikit air panas sekitar 50ml.</span>
                            </div>
                        </li>
                        <li>
                            <div class="serving-method-step-copy">
                                <strong>Dinginkan:</strong>
                                <span>Tambahkan 100ml air dingin dan aduk sampai teksturnya merata.</span>
                            </div>
                        </li>
                        <li>
                            <div class="serving-method-step-copy">
                                <strong>Tambahkan Es:</strong>
                                <span>Masukkan es batu secukupnya. Es Kopi Santan ala kafe siap dinikmati.</span>
                            </div>
                        </li>
                    </ol>

                    <div class="serving-method-note">
                        <span>Best moment</span>
                        <strong>Siang panas, habis kelas, atau chill bareng teman.</strong>
                    </div>
                </div>
            </div>
        </section>

        <section class="serving-flavor-section serving-parallax-section">
            <div class="serving-curve serving-curve-flavor" data-serving-parallax data-serving-speed="-20" aria-hidden="true"></div>
            <div class="serving-bean serving-bean-flavor" data-serving-parallax data-serving-speed="22" aria-hidden="true"></div>

            <div class="serving-flavor-container container">
                <div class="serving-flavor-header" data-serving-reveal>
                    <span class="serving-section-kicker">Mood Seduh</span>
                    <h2>Pilih gaya KOPSOON yang paling cocok buat harimu</h2>
                    <p>Empat card racikan ini bisa jadi panduan cepat sebelum kamu seduh.</p>
                </div>

                <div class="serving-flavor-grid">
                    <article class="serving-flavor-card" data-serving-reveal data-serving-parallax data-serving-speed="-10">
                        <div class="serving-flavor-media">
                            <img src="{{ asset('images/kopi1.webp') }}" alt="KOPSOON hangat untuk focus mode" class="serving-flavor-image">
                            <span class="serving-flavor-number">01</span>
                        </div>
                        <div class="serving-flavor-copy">
                            <h3>Focus Mode</h3>
                            <p>Seduh panas dengan 150ml air untuk rasa yang stabil, gurih, dan nyaman buat mulai aktivitas.</p>
                            <span class="serving-flavor-tag">Hot • Balanced</span>
                        </div>
                    </article>

                    <article class="serving-flavor-card" data-serving-reveal data-serving-reveal-delay="90" data-serving-parallax data-serving-speed="12">
                        <div class="serving-flavor-media">
                            <img src="{{ asset('images/kopi2.webp') }}" alt="Es kopi santan KOPSOON untuk chill break" class="serving-flavor-image">
                            <span class="serving-flavor-number">02</span>
                        </div>
                        <div class="serving-flavor-copy">
                            <h3>Chill Break</h3>
                            <p>Larutkan dulu dengan air panas sedikit, lalu tambah air dingin dan es batu biar tetap creamy.</p>
                            <span class="serving-flavor-tag">Ice • Refreshing</span>
                        </div>
                    </article>

                    <article class="serving-flavor-card" data-serving-reveal data-serving-reveal-delay="180" data-serving-parallax data-serving-speed="-12">
                        <div class="serving-flavor-media">
                            <img src="{{ asset('images/kopi3.webp') }}" alt="Kopi santan KOPSOON creamy dengan tambahan susu" class="serving-flavor-image">
                            <span class="serving-flavor-number">03</span>
                        </div>
                        <div class="serving-flavor-copy">
                            <h3>Creamy Add-on</h3>
                            <p>Tambahkan susu evaporasi kalau kamu suka rasa yang lebih lembut, tebal, dan ala kafe.</p>
                            <span class="serving-flavor-tag">Soft • Creamy</span>
                        </div>
                    </article>

                    <article class="serving-flavor-card" data-serving-reveal data-serving-reveal-delay="270" data-serving-parallax data-serving-speed="10">
                        <div class="serving-flavor-media">
                            <img src="{{ asset('images/kopi4.webp') }}" alt="KOPSOON kopi santan dengan racikan gula aren" class="serving-flavor-image">
                            <span class="serving-flavor-number">04</span>
                        </div>
                        <div class="serving-flavor-copy">
                            <h3>Foamy Finish</h3>
                            <p>Pakai mini frother selama beberapa detik untuk hasil busa tipis yang bikin tampilannya makin premium.</p>
                            <span class="serving-flavor-tag">Cafe • Foamy</span>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="serving-hacks-section serving-parallax-section">
            <div class="serving-curve serving-curve-hacks" data-serving-parallax data-serving-speed="-28" aria-hidden="true"></div>
            <div class="serving-bean serving-bean-hacks" data-serving-parallax data-serving-speed="24" aria-hidden="true"></div>
            <div class="serving-beans-outline serving-beans-outline-right" data-serving-parallax data-serving-speed="18" aria-hidden="true"></div>

            <div class="serving-hacks-container container">
                <div class="serving-hacks-header" data-serving-reveal>
                    <span class="serving-section-kicker">Cafe Hacks</span>
                    <h2>KOPSOON Hacks Ala Cafe</h2>
                    <p>Sesuain dengan selera Gen Zmu itu</p>
                </div>

                <div class="serving-hacks-grid">
                    <article class="serving-hack-card serving-glass-hack-card" data-serving-reveal data-serving-parallax data-serving-speed="-14">
                        <div class="serving-hack-image-box">
                            <img src="{{ asset('images/gambarkopi.webp') }}" alt="KOPSOON kopi santan double shot" class="serving-hack-image">
                        </div>
                        <span class="serving-hack-tag">Strong</span>
                        <h3>Double Shot</h3>
                        <p>Suka kopi yang lebih strong? Gunakan 2 sachet KOPSOON dengan takaran air 200ml.</p>
                    </article>

                    <article class="serving-hack-card serving-glass-hack-card" data-serving-reveal data-serving-reveal-delay="120" data-serving-parallax data-serving-speed="16">
                        <div class="serving-hack-image-box">
                            <img src="{{ asset('images/serving-ice.webp') }}" alt="KOPSOON kopi santan ekstra creamy" class="serving-hack-image">
                        </div>
                        <span class="serving-hack-tag">Creamy</span>
                        <h3>Extra Creamy</h3>
                        <p>Tambahkan 2 sendok makan susu evaporasi ke dalam racikan es KOPSOON-mu.</p>
                    </article>

                    <article class="serving-hack-card serving-glass-hack-card" data-serving-reveal data-serving-reveal-delay="240" data-serving-parallax data-serving-speed="-14">
                        <div class="serving-hack-image-box">
                            <img src="{{ asset('images/serving-hot.webp') }}" alt="KOPSOON kopi santan foamy style" class="serving-hack-image">
                        </div>
                        <span class="serving-hack-tag">Foamy</span>
                        <h3>Foamy Style</h3>
                        <p>Aduk menggunakan mini milk frother selama 10 detik biar kopimu punya foam tebal di atasnya.</p>
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
