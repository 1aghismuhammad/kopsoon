<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promo & Reseller KOPSOON - Peluang Cuan Kopi Santan</title>

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
</head>
<body class="reseller-page">

    @include('components.navbar')

    <main>
        <section class="reseller-hero-section">
            <div class="reseller-curve reseller-curve-hero"></div>
            <div class="reseller-bean reseller-bean-left"></div>
            <div class="reseller-beans-outline reseller-beans-hero"></div>

            <div class="reseller-hero-container container">
                <div class="reseller-hero-content">
                    <h1>Nikmati Promonya,<br>Ambil Peluang Cuannya!</h1>
                    <p>
                        Mulai dari jajan hemat pakai promo spesial, sampai kumpulin income tambahan
                        buat mahasiswa dan first-jobber. KOPSOON punya penawaran menarik buat kamu!
                    </p>
                </div>
            </div>
        </section>

        <section class="reseller-deals-section">
            <div class="reseller-wave reseller-wave-top"></div>
            <div class="reseller-circle reseller-circle-deals"></div>

            <div class="reseller-deals-container container">
                <h2>SPECIAL DEALS!</h2>

                <div class="reseller-deals-list">
                    <article class="reseller-deal-card">
                        <div class="reseller-deal-text">
                            <h3>Diskon Mahasiswa</h3>
                            <p>
                                Tunjukkan Kartu Tanda Mahasiswa (KTM) atau checkout pakai email kampusmu
                                untuk dapatkan diskon 10% di pembelian pertama!
                            </p>
                        </div>
                        <a href="#" class="reseller-deal-btn">GET YOUR PROMO HERE</a>
                    </article>

                    <article class="reseller-deal-card">
                        <div class="reseller-deal-text">
                            <h3>Bundling Hemat</h3>
                            <p>
                                Beli 2 KOPSOON paket nugas isi 10 sachet, gratis ongkir ke seluruh Pulau Jawa!
                            </p>
                        </div>
                        <a href="#" class="reseller-deal-btn">GET YOUR PROMO HERE</a>
                    </article>
                </div>
            </div>
        </section>

        <section class="reseller-benefits-section">
            <div class="reseller-benefits-container container">
                <div class="reseller-benefits-header">
                    <h2>Jadi Bagian dari Keluarga KOPSOON</h2>
                    <p>
                        Pengen punya penghasilan tambahan tanpa ganggu waktu kuliah atau kerja?
                        Jadi reseller KOPSOON adalah jawabannya. Produknya unik, rasanya enak,
                        dan pasarnya sangat luas!
                    </p>
                </div>

                <div class="reseller-benefits-grid">
                    <article class="reseller-benefit-item">
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

                    <article class="reseller-benefit-item">
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

                    <article class="reseller-benefit-item">
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

                    <article class="reseller-benefit-item">
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

        <section class="reseller-packages-section">
            <div class="reseller-curve reseller-curve-packages-left"></div>
            <div class="reseller-curve reseller-curve-packages-right"></div>

            <div class="reseller-packages-container container">
                <h2>PILIHAN PAKET RESELLER</h2>

                <div class="reseller-package-grid">
                    <article class="reseller-package-card">
                        <div class="reseller-package-image-wrap">
                            <img src="{{ asset('images/product-pack.png') }}" alt="Paket Pemula Reseller KOPSOON" class="reseller-package-image">
                        </div>
                        <h3>Paket Pemula <span>(Starter Kit)</span></h3>
                        <ul>
                            <li><strong>Cocok untuk:</strong> yang mau coba-coba pasar di lingkungan kampus atau kantor.</li>
                            <li><strong>Isi Paket:</strong> 50 sachet KOPSOON + akses grup materi promosi.</li>
                            <li><strong>Harga Modal:</strong> Rp XXX.XXX, lebih murah dari eceran.</li>
                            <li><strong>Potensi Keuntungan:</strong> Rp XX.XXX per paket.</li>
                        </ul>
                    </article>

                    <article class="reseller-package-card">
                        <div class="reseller-package-image-wrap">
                            <img src="{{ asset('images/product-box.png') }}" alt="Paket Juragan Reseller KOPSOON" class="reseller-package-image">
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

        <section class="reseller-join-section">
            <div class="reseller-curve reseller-curve-join"></div>
            <div class="reseller-bean reseller-bean-join"></div>
            <div class="reseller-beans-outline reseller-beans-join"></div>

            <div class="reseller-join-container container">
                <h2>Cara Bergabung <span>(Alur Pendaftaran)</span></h2>

                <div class="reseller-steps">
                    <div class="reseller-step-item">
                        <span>1</span>
                        <p>Pilih paket reseller yang paling sesuai dengan targetmu.</p>
                    </div>

                    <div class="reseller-step-item">
                        <span>2</span>
                        <p>Isi formulir pendaftaran singkat melalui WhatsApp admin kami.</p>
                    </div>

                    <div class="reseller-step-item">
                        <span>3</span>
                        <p>Selesaikan pembayaran, dan paket KOPSOON beserta akses materi promosi akan langsung dikirim ke tempatmu. Mulai jualan deh!</p>
                    </div>
                </div>

                <div class="reseller-join-bottom">
                    <p>
                        Tunggu apa lagi? Kuota agen reseller per area terbatas, lho!<br>
                        Amankan posisimu sekarang dan mulai raih cuan bareng KOPSOON.
                    </p>
                    <a href="#" class="reseller-join-btn">Daftar Jadi Reseller Sekarang</a>
                </div>
            </div>
        </section>
    </main>

    @include('components.footer')

</body>
</html>
