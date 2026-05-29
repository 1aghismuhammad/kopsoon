<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/webp" href="{{ asset('images/icon-kopsoon.webp') }}">
    <link rel="shortcut icon" href="{{ asset('images/icon-kopsoon.webp') }}">
    @include('components.seo', [
        'title' => 'Kontak & Order KOPSOON | Beli Kopi Santan Instan',
        'description' => 'Hubungi KOPSOON untuk pemesanan, reseller, marketplace, WhatsApp customer service, media sosial, dan informasi pengiriman kopi santan instan.',
        'canonical' => 'https://kopsoon.aksivastudio.my.id/contact',
        'image' => 'images/product-pack.webp',
        'type' => 'website',
        'schemas' => [
            [
                '@context' => 'https://schema.org',
                '@type' => 'ContactPage',
                '@id' => 'https://kopsoon.aksivastudio.my.id/contact#webpage',
                'url' => 'https://kopsoon.aksivastudio.my.id/contact',
                'name' => 'Kontak dan Order KOPSOON',
                'description' => 'Halaman kontak, pemesanan, marketplace, dan customer service KOPSOON.',
                'inLanguage' => 'id-ID',
                'mainEntity' => [
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
                        'name' => 'Kontak',
                        'item' => 'https://kopsoon.aksivastudio.my.id/contact',
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
    <link rel="stylesheet" href="{{ asset('css/contact-page.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contact-parallax.css') }}">
    <link rel="stylesheet" href="{{ asset('css/page-transition.css') }}">
    <link rel="stylesheet" href="{{ asset('css/kopsoon-text-palette.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contact-marketplace-cards.css') }}">
</head>
<body class="contact-page-body contact-parallax">
    @include('components.page-transition')

    @include('components.navbar')

    <main>
        <section class="contact-hero-section" data-contact-hero aria-labelledby="contact-hero-title">
            <div class="contact-hero-curve" data-contact-parallax data-contact-speed="-34" aria-hidden="true"></div>
            <div class="contact-hero-splash" data-contact-parallax data-contact-speed="30" aria-hidden="true"></div>
            <div class="contact-hero-beans" data-contact-parallax data-contact-speed="20" aria-hidden="true"></div>

            <div class="contact-hero-container container">
                <div class="contact-hero-copy" data-contact-reveal>
                    <span class="contact-eyebrow">KOPSOON Support</span>
                    <h1 id="contact-hero-title">Sapa Kami &amp; Pesan KOPSOON-mu!</h1>
                    <p>
                        Mau tanya-tanya soal produk, order partai besar untuk event kampus,
                        atau butuh bantuan soal pemesananmu? Jangan ragu, tim kami siap membantumu.
                    </p>
                </div>
            </div>
        </section>

        <section class="marketplace-section contact-parallax-section" aria-labelledby="marketplace-title">
            <div class="marketplace-orbit marketplace-orbit-left" data-contact-parallax data-contact-speed="-22" aria-hidden="true"></div>
            <div class="marketplace-orbit marketplace-orbit-right" data-contact-parallax data-contact-speed="32" aria-hidden="true"></div>
            <div class="marketplace-beans" data-contact-parallax data-contact-speed="18" aria-hidden="true"></div>
            <img src="{{ asset('images/product-pack.webp') }}" alt="" class="marketplace-pack-float" data-contact-parallax data-contact-speed="-28" aria-hidden="true">

            <div class="marketplace-container container">
                <div class="marketplace-header" data-contact-reveal>
                    <h2 id="marketplace-title">Pilih platform belanja kesayanganmu dan nikmati berbagai promo gratis ongkir!</h2>
                </div>

                <div class="marketplace-grid">
                    <article class="marketplace-card" data-contact-reveal>
                        <div class="marketplace-logo-box marketplace-logo-shopee" aria-hidden="true"><img src="{{ asset('images/shopee.svg') }}" alt="" class="marketplace-logo-img"></div>
                        <h3>Shopee</h3>
                        <p>Cocok untuk pembelian eceran dan klaim promo ongkir.</p>
                        <a href="https://wa.me/6289912314371?text=Halo%20Admin%20KOPSOON%2C%20saya%20mau%20order%20via%20Shopee." target="_blank" rel="noopener noreferrer" class="marketplace-btn">Order Now</a>
                    </article>

                    <article class="marketplace-card" data-contact-reveal data-contact-reveal-delay="120">
                        <div class="marketplace-logo-box marketplace-logo-tokopedia" aria-hidden="true"><img src="{{ asset('images/tokopedia.svg') }}" alt="" class="marketplace-logo-img"></div>
                        <h3>Tokopedia</h3>
                        <p>Pesan lebih mudah untuk stok rumah, kantor, atau kos.</p>
                        <a href="https://wa.me/6289912314371?text=Halo%20Admin%20KOPSOON%2C%20saya%20mau%20order%20via%20Tokopedia." target="_blank" rel="noopener noreferrer" class="marketplace-btn">Order Now</a>
                    </article>

                    <article class="marketplace-card" data-contact-reveal data-contact-reveal-delay="240">
                        <div class="marketplace-logo-box marketplace-logo-tiktok" aria-hidden="true"><img src="{{ asset('images/tiktok.svg') }}" alt="" class="marketplace-logo-img"></div>
                        <h3>TikTok Shop</h3>
                        <p>Ikuti live, konten promo, dan penawaran khusus KOPSOON.</p>
                        <a href="https://wa.me/6289912314371?text=Halo%20Admin%20KOPSOON%2C%20saya%20mau%20order%20via%20TikTok%20Shop." target="_blank" rel="noopener noreferrer" class="marketplace-btn">Order Now</a>
                    </article>
                </div>
            </div>
        </section>

        <section class="contact-service-section contact-parallax-section" id="contact-service" aria-labelledby="contact-service-title">
            <div class="contact-service-glow contact-service-glow-left" data-contact-parallax data-contact-speed="26" aria-hidden="true"></div>
            <div class="contact-service-glow contact-service-glow-right" data-contact-parallax data-contact-speed="-30" aria-hidden="true"></div>
            <div class="contact-service-beans" data-contact-parallax data-contact-speed="20" aria-hidden="true"></div>
            <img src="{{ asset('images/product-box.webp') }}" alt="" class="contact-service-pack" data-contact-parallax data-contact-speed="-24" aria-hidden="true">

            <div class="contact-service-container container">
                <div class="contact-service-copy" data-contact-reveal>
                    <h2 id="contact-service-title">Customer Service &amp; Media Sosial</h2>

                    <div class="service-info-block">
                        <h3>Chat via WhatsApp <span>(Admin Order &amp; Reseller)</span></h3>
                        <p>
                            Lebih suka order manual atau mau daftar jadi mitra? Chat admin kami,
                            fast response di jam kerja.
                        </p>
                    </div>

                    <div class="service-info-block">
                        <h3>Ikuti Keseruan Kami di Media Sosial</h3>
                        <p>
                            Jangan sampai ketinggalan promo kilat, giveaway, dan konten aesthetic
                            seputar kopi santan Nusantara.
                        </p>
                    </div>
                </div>

                <div class="contact-service-actions" data-contact-reveal data-contact-reveal-delay="140" aria-label="Daftar kontak KOPSOON">
                    <a href="https://wa.me/6289912314371?text=Halo%20Admin%20KOPSOON%2C%20saya%20ingin%20bertanya%20tentang%20produk%20dan%20pemesanan." target="_blank" rel="noopener noreferrer" class="service-action-row">
                        <span class="service-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L0 24l6.335-1.662c1.746.953 3.71 1.455 5.703 1.456h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                        </span>
                        <span class="service-action-btn">WhatsApp Admin</span>
                    </a>

                    <a href="https://instagram.com/KOPSOON" target="_blank" rel="noopener noreferrer" class="service-action-row">
                        <span class="service-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                        </span>
                        <span class="service-action-btn">Instagram KOPSOON</span>
                    </a>

                    <a href="https://tiktok.com/@KOPSOON" target="_blank" rel="noopener noreferrer" class="service-action-row">
                        <span class="service-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.01 1.61 4.19 1.31 1.45 3.19 2.3 5.17 2.44v3.82c-1.8-.08-3.56-.75-4.99-1.91-.25-.2-.48-.42-.7-.66V15c-.02 1.47-.46 2.92-1.28 4.14-1.63 2.45-4.48 3.93-7.46 3.84-2.92-.09-5.69-1.74-6.99-4.36-1.42-2.85-1.07-6.42 1.1-8.91 1.76-2.02 4.46-3.08 7.12-2.73V10.3c-1.29-.46-2.77-.18-3.79.69-.99.85-1.4 2.22-1.06 3.47.33 1.25 1.38 2.19 2.67 2.37 1.4.19 2.85-.56 3.44-1.84.41-.89.47-1.89.46-2.87V.02z"/></svg>
                        </span>
                        <span class="service-action-btn">TikTok KOPSOON</span>
                    </a>
                </div>
            </div>
        </section>

        <section class="operational-section contact-parallax-section" aria-labelledby="operational-title">
            <div class="operational-splash" data-contact-parallax data-contact-speed="26" aria-hidden="true"></div>
            <div class="operational-beans" data-contact-parallax data-contact-speed="-18" aria-hidden="true"></div>
            <div class="operational-container container">
                <h2 id="operational-title" data-contact-reveal>Informasi Operasional &amp; Basecamp</h2>

                <div class="operational-grid">
                    <article class="operational-card" data-contact-reveal>
                        <h3>Jam Operasional Customer Service</h3>
                        <p>Senin - Jumat: 09.00 - 20.00 WIB</p>
                        <p>Sabtu - Minggu: 10.00 - 17.00 WIB</p>
                    </article>

                    <article class="operational-card" data-contact-reveal data-contact-reveal-delay="120">
                        <h3>Lokasi Pengiriman / Basecamp</h3>
                        <p>Semarang, Jawa Tengah</p>
                        <p>Pengiriman dilakukan setiap hari kerja. Pesanan di atas jam 15.00 WIB akan diproses pada hari berikutnya.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="faq-section contact-parallax-section" aria-labelledby="faq-title">
            <div class="faq-curve" data-contact-parallax data-contact-speed="-24" aria-hidden="true"></div>
            <div class="faq-splash" data-contact-parallax data-contact-speed="30" aria-hidden="true"></div>
            <div class="faq-beans" data-contact-parallax data-contact-speed="18" aria-hidden="true"></div>

            <div class="faq-container container">
                <div class="faq-heading" data-contact-reveal>
                    <span class="faq-eyebrow">FAQ KOPSOON</span>
                    <h2 id="faq-title">Pertanyaan yang Sering Ditanyakan</h2>
                    <p>
                        Biar kamu makin yakin sebelum order, ini beberapa pertanyaan yang paling sering masuk ke tim kami.
                    </p>
                </div>

                <div class="faq-list">
                    <article class="faq-item" data-contact-reveal>
                        <h3>Q: Apakah KOPSOON aman untuk asam lambung?</h3>
                        <p>A: KOPSOON menggunakan kopi pilihan dan santan asli yang cenderung lebih ramah di perut, namun tetap disarankan dikonsumsi setelah makan, ya!</p>
                    </article>

                    <article class="faq-item" data-contact-reveal data-contact-reveal-delay="120">
                        <h3>Q: Tahan berapa lama produknya?</h3>
                        <p>A: Dalam kemasan sachet tersegel, KOPSOON tahan hingga 12 bulan dari tanggal produksi.</p>
                    </article>

                    <article class="faq-item" data-contact-reveal data-contact-reveal-delay="240">
                        <h3>Q: Bisa dikirim ke luar Pulau Jawa?</h3>
                        <p>A: Tentu bisa! Kami merekomendasikan order via marketplace agar kamu bisa menikmati subsidi ongkir.</p>
                    </article>
                </div>
            </div>
        </section>
    </main>

    @include('components.footer')

    <script src="{{ asset('js/page-transition.js') }}"></script>
    <script src="{{ asset('js/contact-parallax.js') }}"></script>
</body>
</html>
