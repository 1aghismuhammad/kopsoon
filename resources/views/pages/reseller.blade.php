<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('components.seo', [
        'title' => 'Reseller KOPSOON | Peluang Jualan Kopi Santan Instan',
        'description' => 'Bergabung menjadi reseller KOPSOON dan mulai jualan kopi santan instan khas Blora dengan paket pemula, promo bundling, dan dukungan konten promosi.',
        'canonical' => 'https://kopsoon.aksivastudio.my.id/reseller',
        'image' => 'images/product-box.webp',
        'type' => 'website',
        'schemas' => [
            [
                '@context' => 'https://schema.org',
                '@type' => 'WebPage',
                '@id' => 'https://kopsoon.aksivastudio.my.id/reseller#webpage',
                'url' => 'https://kopsoon.aksivastudio.my.id/reseller',
                'name' => 'Reseller KOPSOON',
                'description' => 'Informasi paket reseller dan peluang jualan kopi santan instan KOPSOON.',
                'inLanguage' => 'id-ID',
                'about' => [
                    '@id' => 'https://kopsoon.aksivastudio.my.id/#organization',
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
                        'name' => 'Reseller',
                        'item' => 'https://kopsoon.aksivastudio.my.id/reseller',
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
    <link rel="stylesheet" href="{{ asset('css/reseller-page.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reseller-hero.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reseller-deals.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reseller-benefits.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reseller-packages.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reseller-join.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reseller-parallax.css') }}">
    <link rel="stylesheet" href="{{ asset('css/page-transition.css') }}">
</head>
<body class="reseller-page reseller-parallax">
    @include('components.page-transition')

    @include('components.navbar')

    <main>
        <section class="reseller-hero-section" data-reseller-hero aria-labelledby="reseller-hero-title">
            <div class="reseller-curve reseller-curve-hero" data-reseller-parallax data-reseller-speed="-34" aria-hidden="true"></div>
            <div class="reseller-bean reseller-bean-left" data-reseller-parallax data-reseller-speed="24" aria-hidden="true"></div>
            <div class="reseller-beans-outline reseller-beans-hero" data-reseller-parallax data-reseller-speed="18" aria-hidden="true"></div>

            <div class="reseller-hero-container container">
                <div class="reseller-hero-content" data-reseller-reveal>
                    <span class="reseller-eyebrow">KOPSOON Partner</span>
                    <h1 id="reseller-hero-title">Nikmati Promonya, Ambil Peluang Cuannya!</h1>
                    <p>
                        Mulai dari jajan hemat pakai promo spesial, sampai kumpulin income tambahan
                        buat mahasiswa dan first-jobber. KOPSOON punya penawaran menarik buat kamu!
                    </p>
                </div>
            </div>
        </section>

        <section class="reseller-deals-section reseller-parallax-section">
            <div class="reseller-wave reseller-wave-top" data-reseller-parallax data-reseller-speed="-22" aria-hidden="true"></div>
            <div class="reseller-circle reseller-circle-deals" data-reseller-parallax data-reseller-speed="28" aria-hidden="true"></div>

            <div class="reseller-deals-container container" data-reseller-reveal>
                <h2>SPECIAL DEALS!</h2>

                <div class="reseller-deals-list">
                    <article class="reseller-deal-card" data-reseller-reveal data-reseller-parallax data-reseller-speed="-12">
                        <div class="reseller-deal-text">
                            <h3>Diskon Mahasiswa</h3>
                            <p>
                                Tunjukkan Kartu Tanda Mahasiswa (KTM) atau checkout pakai email kampusmu
                                untuk dapatkan diskon 10% di pembelian pertama!
                            </p>
                        </div>
                        <a href="{{ route('contact') }}" class="reseller-deal-btn">GET YOUR PROMO HERE</a>
                    </article>

                    <article class="reseller-deal-card" data-reseller-reveal data-reseller-reveal-delay="120" data-reseller-parallax data-reseller-speed="14">
                        <div class="reseller-deal-text">
                            <h3>Bundling Hemat</h3>
                            <p>
                                Beli 2 KOPSOON paket nugas isi 10 sachet, gratis ongkir ke seluruh Pulau Jawa!
                            </p>
                        </div>
                        <a href="{{ route('contact') }}" class="reseller-deal-btn">GET YOUR PROMO HERE</a>
                    </article>
                </div>
            </div>
        </section>

        <section class="reseller-benefits-section reseller-parallax-section">
            <div class="reseller-benefits-container container">
                <div class="reseller-benefits-header" data-reseller-reveal>
                    <h2>Jadi Bagian dari Keluarga KOPSOON</h2>
                    <p>
                        Pengen punya penghasilan tambahan tanpa ganggu waktu kuliah atau kerja?
                        Jadi reseller KOPSOON adalah jawabannya. Produknya unik, rasanya enak,
                        dan pasarnya sangat luas!
                    </p>
                </div>

                <div class="reseller-benefits-grid">
                    <article class="reseller-benefit-item" data-reseller-reveal data-reseller-parallax data-reseller-speed="-10">
                        <div class="reseller-benefit-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M4 7h16v11H4z"></path>
                                <path d="M7 7V5h10v2"></path>
                                <path d="M7 11h10"></path>
                                <path d="M9 14h2"></path>
                                <path d="M13 14h2"></path>
                            </svg>
                        </div>
                        <div>
                            <h3>Modal Ramah di Kantong</h3>
                            <p>Bisa mulai jualan dengan modal yang sangat terjangkau, cocok untuk kantong mahasiswa.</p>
                        </div>
                    </article>

                    <article class="reseller-benefit-item" data-reseller-reveal data-reseller-reveal-delay="100" data-reseller-parallax data-reseller-speed="12">
                        <div class="reseller-benefit-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M4 15V7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8"></path>
                                <path d="M8 19h8"></path>
                                <path d="M10 15l2-2 2 2"></path>
                                <path d="M12 13V9"></path>
                            </svg>
                        </div>
                        <div>
                            <h3>Konten Promosi Disediakan</h3>
                            <p>Kami siapkan foto produk aesthetic, video TikTok/Reels, dan copywriting siap posting.</p>
                        </div>
                    </article>

                    <article class="reseller-benefit-item" data-reseller-reveal data-reseller-reveal-delay="200" data-reseller-parallax data-reseller-speed="-10">
                        <div class="reseller-benefit-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M4 20h16"></path>
                                <path d="M7 16v-5"></path>
                                <path d="M12 16V8"></path>
                                <path d="M17 16V5"></path>
                                <path d="M6 8l5-3 4 2 3-4"></path>
                            </svg>
                        </div>
                        <div>
                            <h3>Margin Profit Menarik</h3>
                            <p>Harga khusus mitra bikin kamu dapat cuan maksimal dari setiap sachet yang terjual.</p>
                        </div>
                    </article>

                    <article class="reseller-benefit-item" data-reseller-reveal data-reseller-reveal-delay="300" data-reseller-parallax data-reseller-speed="12">
                        <div class="reseller-benefit-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2l2.9 6.6L22 12l-7.1 3.4L12 22l-2.9-6.6L2 12l7.1-3.4L12 2z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3>Produk Unik &amp; Gampang Dijual</h3>
                            <p>Kopi santan instan masih sangat jarang di pasaran. Kamu menawarkan sesuatu yang baru dan bikin penasaran!</p>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="reseller-packages-section reseller-parallax-section">
            <div class="reseller-curve reseller-curve-packages-left" data-reseller-parallax data-reseller-speed="-24" aria-hidden="true"></div>
            <div class="reseller-curve reseller-curve-packages-right" data-reseller-parallax data-reseller-speed="30" aria-hidden="true"></div>

            <div class="reseller-packages-container container">
                <h2 data-reseller-reveal>PILIHAN PAKET RESELLER</h2>

                <div class="reseller-package-grid">
                    <article class="reseller-package-card" data-reseller-reveal data-reseller-parallax data-reseller-speed="-16">
                        <div class="reseller-package-image-wrap">
                            <img src="{{ asset('images/product-pack.webp') }}" alt="Paket Pemula Reseller KOPSOON" class="reseller-package-image">
                        </div>
                        <h3>Paket Pemula <span>(Starter Kit)</span></h3>
                        <ul>
                            <li><strong>Cocok untuk:</strong> yang mau coba-coba pasar di lingkungan kampus atau kantor.</li>
                            <li><strong>Isi Paket:</strong> 50 sachet KOPSOON + akses grup materi promosi.</li>
                            <li><strong>Harga Modal:</strong> Rp XXX.XXX, lebih murah dari eceran.</li>
                            <li><strong>Potensi Keuntungan:</strong> Rp XX.XXX per paket.</li>
                        </ul>
                    </article>

                    <article class="reseller-package-card is-featured" data-reseller-reveal data-reseller-reveal-delay="140" data-reseller-parallax data-reseller-speed="16">
                        <div class="reseller-package-image-wrap">
                            <img src="{{ asset('images/product-box.webp') }}" alt="Paket Juragan Reseller KOPSOON" class="reseller-package-image">
                        </div>
                        <h3>Paket Juragan <span>(Growth Kit) - Paling Diminati!</span></h3>
                        <ul>
                            <li><strong>Cocok untuk:</strong> yang serius mulai jualan online dan buka booth kecil-kecilan.</li>
                            <li><strong>Isi Paket:</strong> 150 sachet KOPSOON + spanduk kecil + akses grup materi promosi &amp; mentoring bisnis.</li>
                            <li><strong>Harga Modal:</strong> Rp XXX.XXX, harga spesial mitra.</li>
                            <li><strong>Potensi Keuntungan:</strong> Rp XXX.XXX per paket.</li>
                        </ul>
                    </article>
                </div>
            </div>
        </section>

        <section class="reseller-join-section reseller-parallax-section">
            <div class="reseller-curve reseller-curve-join" data-reseller-parallax data-reseller-speed="-26" aria-hidden="true"></div>
            <div class="reseller-bean reseller-bean-join" data-reseller-parallax data-reseller-speed="22" aria-hidden="true"></div>
            <div class="reseller-beans-outline reseller-beans-join" data-reseller-parallax data-reseller-speed="16" aria-hidden="true"></div>

            <div class="reseller-join-container container" data-reseller-reveal>
                <h2>Cara Bergabung <span>(Alur Pendaftaran)</span></h2>

                <div class="reseller-steps">
                    <div class="reseller-step-item" data-reseller-reveal data-reseller-reveal-delay="80">
                        <span>1</span>
                        <p>Pilih paket reseller yang paling sesuai dengan targetmu.</p>
                    </div>

                    <div class="reseller-step-item" data-reseller-reveal data-reseller-reveal-delay="180">
                        <span>2</span>
                        <p>Isi formulir pendaftaran singkat melalui WhatsApp admin kami.</p>
                    </div>

                    <div class="reseller-step-item" data-reseller-reveal data-reseller-reveal-delay="280">
                        <span>3</span>
                        <p>Selesaikan pembayaran, dan paket KOPSOON beserta akses materi promosi akan langsung dikirim ke tempatmu. Mulai jualan deh!</p>
                    </div>
                </div>

                <div class="reseller-join-bottom">
                    <p>
                        Tunggu apa lagi? Kuota agen reseller per area terbatas, lho!<br>
                        Amankan posisimu sekarang dan mulai raih cuan bareng KOPSOON.
                    </p>
                    <a href="{{ route('contact') }}" class="reseller-join-btn">Daftar Jadi Reseller Sekarang</a>
                </div>
            </div>
        </section>
    </main>

    @include('components.footer')

    <script src="{{ asset('js/page-transition.js') }}"></script>
    <script src="{{ asset('js/reseller-parallax.js') }}"></script>
</body>
</html>
