<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('components.seo', [
        'title' => 'Tentang KOPSOON | Cerita Kopi Santan Instan Khas Blora',
        'description' => 'Kenali cerita KOPSOON, brand kopi santan instan yang mengangkat rasa lokal Nusantara dalam kemasan praktis, modern, dan cocok untuk generasi muda.',
        'canonical' => 'https://kopsoon.aksivastudio.my.id/about',
        'image' => 'images/kopi5.webp',
        'type' => 'article',
        'schemas' => [
            [
                '@context' => 'https://schema.org',
                '@type' => 'AboutPage',
                '@id' => 'https://kopsoon.aksivastudio.my.id/about#webpage',
                'url' => 'https://kopsoon.aksivastudio.my.id/about',
                'name' => 'Tentang KOPSOON',
                'description' => 'Cerita KOPSOON dalam mengangkat kopi santan khas Nusantara menjadi produk instan yang praktis dan modern.',
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
                        'name' => 'Tentang',
                        'item' => 'https://kopsoon.aksivastudio.my.id/about',
                    ],
                ],
            ],
        ],
    ])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/kopsoon-core.css') }}">
    <link rel="stylesheet" href="{{ asset('css/kopsoon-about.css') }}">
</head>
<body class="about-page about-parallax">
    @include('components.page-transition')

    @include('components.navbar')

    <main>
        <section class="about-hero-section" data-about-hero aria-labelledby="about-hero-title">
            <div class="about-hero-curve" data-about-parallax data-about-speed="-34" aria-hidden="true"></div>
            <div class="about-hero-splash" data-about-parallax data-about-speed="30" aria-hidden="true"></div>
            <div class="about-hero-beans" data-about-parallax data-about-speed="20" aria-hidden="true"></div>

            <div class="about-hero-container container">
                <div class="about-hero-content" data-about-reveal>
                    <span class="about-hero-eyebrow">KOPSOON Story</span>
                    <h1 class="about-hero-title" id="about-hero-title">Cerita di Balik Secangkir KOPSOON</h1>
                    <p>
                        Menghidupkan kembali warisan rasa Nusantara dalam balutan kepraktisan masa kini.
                    </p>
                </div>
            </div>
        </section>

        <section class="about-story-section about-story-light about-parallax-section">
            <div class="about-cup-outline" data-about-parallax data-about-speed="-42"></div>
            <div class="about-story-container container about-story-grid">
                <div class="about-story-visual" data-about-parallax data-about-speed="30">
                    <div class="about-story-visual-card">
                        <img
                            class="about-story-visual-image"
                            src="{{ asset('images/kopi5.webp') }}"
                            alt="Suasana secangkir kopi hangat untuk cerita awal KOPSOON"
                        >
                        <div class="about-story-visual-pill">Rasa Lokal, Vibes Modern</div>
                        <div class="about-story-visual-badge">
                            <span>Kopi Santan</span>
                            <strong>Authentic Taste</strong>
                        </div>
                    </div>
                </div>
                <div class="about-story-content about-story-content-card" data-about-reveal>
                    <span class="about-story-eyebrow">Cerita Awal KOPSOON</span>
                    <h2><span>B</span>erawal dari Rasa yang Mulai Terlupakan</h2>
                    <p>
                        Di tengah gempuran tren minuman kekinian yang rasanya sering kali monoton dan didominasi rasa manis,
                        kami menyadari ada satu kekayaan kuliner Indonesia yang luar biasa: <strong>Kopi Santan</strong>.
                        Perpaduan rasa kopi yang pekat dengan gurih dan creamy-nya santan menciptakan profil rasa autentik
                        yang tidak mudah dilupakan.
                    </p>
                    <p>
                        Namun, cara penyajian tradisional sering dianggap kurang praktis untuk gaya hidup generasi muda
                        yang serba cepat dan dinamis. Dari keresahan itulah KOPSOON lahir.
                    </p>
                </div>
            </div>
        </section>

        <section class="about-story-section about-story-dark about-parallax-section">
            <div class="about-dark-decoration about-dark-decoration-left" data-about-parallax data-about-speed="44"></div>
            <div class="about-dark-decoration about-dark-decoration-right" data-about-parallax data-about-speed="-32"></div>
            <div class="about-story-container container about-story-grid about-story-grid-reverse">
                <div class="about-story-content about-story-content-dark about-story-content-dark-card" data-about-reveal>
                    <span class="about-story-eyebrow about-story-eyebrow-dark">Tradisi yang Dibawa Maju</span>
                    <h2><span>M</span>embawa Tradisi ke Dalam Genggaman</h2>
                    <p>
                        Berangkat dari kerinduan akan cita rasa lokal tersebut, KOPSOON hadir. Kami meracik perpaduan biji kopi
                        pilihan dan ekstrak santan berkualitas tinggi menjadi sebuah inovasi minuman kopi instan.
                    </p>
                    <p>
                        Tanpa repot, tanpa menghilangkan rasa aslinya. KOPSOON diciptakan untuk kamu yang ingin menikmati
                        creamy-nya kopi santan khas Nusantara kapan saja dan di mana saja — cocok diseduh hangat sebagai teman tugas,
                        atau disajikan dingin dengan es batu untuk menyegarkan harimu.
                    </p>
                    <div class="about-story-feature-row">
                        <div class="about-story-feature-chip">Praktis Diseduh</div>
                        <div class="about-story-feature-chip">Rasa Nusantara</div>
                        <div class="about-story-feature-chip">Hangat / Dingin</div>
                    </div>
                </div>
                <div class="about-product-photo about-product-photo-card" data-about-reveal data-about-reveal-delay="120" data-about-parallax data-about-speed="-24">
                    <div class="about-product-photo-frame">
                        <img src="{{ asset('images/product-pack.webp') }}" alt="Produk KOPSOON Kopi Santan Instan">
                        <div class="about-product-floating-badge">
                            <span>Ready to Brew</span>
                            <strong>Praktis & Creamy</strong>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="about-values-section about-parallax-section">
            <div class="about-values-curve" data-about-parallax data-about-speed="38"></div>
            <div class="about-values-container container">
                <div class="about-values-heading about-values-heading-card" data-about-reveal>
                    <span class="about-values-eyebrow">Nilai Utama Kami</span>
                    <h2>OUR CORE VALUES</h2>
                    <p>
                        Tiga fondasi yang membentuk cara KOPSOON meracik rasa, membangun produk, dan menyapa generasi baru pecinta kopi santan.
                    </p>
                </div>

                <div class="about-values-list" data-about-reveal data-about-reveal-delay="120">
                    <article class="about-value-item">
                        <span class="about-value-badge">01</span>
                        <h3>Cita Rasa Autentik Nusantara</h3>
                        <p>
                            Kami berkomitmen menjaga keaslian rasa kopi santan tradisional, namun dengan standar kualitas
                            produksi modern yang higienis.
                        </p>
                    </article>

                    <article class="about-value-item">
                        <span class="about-value-badge">02</span>
                        <h3>Praktis & Dinamis</h3>
                        <p>
                            KOPSOON dirancang untuk gaya hidup aktif: mudah diseduh, mudah dibawa, dan tetap nikmat dinikmati
                            panas maupun dingin.
                        </p>
                    </article>

                    <article class="about-value-item">
                        <span class="about-value-badge">03</span>
                        <h3>Kebanggaan Lokal</h3>
                        <p>
                            Misi kami adalah memperkenalkan kembali kebanggaan kuliner lokal kepada generasi muda, membuktikan
                            bahwa minuman tradisional bisa bersaing di pasar modern.
                        </p>
                    </article>
                </div>
            </div>
        </section>

        <section class="about-team-section about-parallax-section">
            <div class="about-team-decoration about-team-decoration-left" data-about-parallax data-about-speed="-30"></div>
            <div class="about-team-decoration about-team-decoration-right" data-about-parallax data-about-speed="36"></div>
            <div class="about-team-container container">
                <h2 data-about-reveal>MEET OUR TEAM</h2>

                <div class="about-team-grid">
                    <article class="about-team-card" data-about-reveal data-about-reveal-delay="80">

                        <div class="about-team-profile-pic">
                            <img
                                src="{{ asset('images/khalid.webp') }}"
                                alt="Foto profil anggota tim KOPSOON"
                                loading="lazy"
                            >
                        </div>

                        <div class="about-team-bottom">
                            <div class="about-team-content">
                                <span class="about-team-name">Muhammad Khalid Misy'al</span>
                            </div>

                            <div class="about-team-bottom-bottom">
                                <div class="about-team-social-links">
                                    <a href="https://wa.me/6281326452491" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp Muhammad Khalid Misy'al">
                                        <svg viewBox="0 0 24 24" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.04 2C6.58 2 2.14 6.44 2.14 11.9c0 1.74.46 3.45 1.33 4.95L2 22l5.29-1.39a9.86 9.86 0 0 0 4.75 1.21h.01c5.46 0 9.9-4.44 9.9-9.9C21.95 6.44 17.51 2 12.04 2Zm0 18.15h-.01a8.22 8.22 0 0 1-4.19-1.15l-.3-.18-3.14.82.84-3.06-.2-.31a8.23 8.23 0 0 1-1.26-4.37c0-4.55 3.7-8.25 8.26-8.25 2.2 0 4.27.86 5.83 2.42a8.2 8.2 0 0 1 2.42 5.84c0 4.54-3.7 8.24-8.25 8.24Zm4.52-6.17c-.25-.12-1.47-.72-1.7-.8-.23-.09-.39-.13-.56.12-.17.25-.64.8-.79.97-.15.17-.29.19-.54.06-.25-.12-1.05-.39-2-1.24-.74-.66-1.24-1.47-1.38-1.72-.14-.25-.02-.38.11-.51.11-.11.25-.29.37-.44.12-.15.17-.25.25-.42.08-.17.04-.31-.02-.44-.06-.12-.56-1.34-.76-1.84-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.44.06-.66.31-.23.25-.87.85-.87 2.07 0 1.22.89 2.4 1.01 2.56.12.17 1.75 2.67 4.24 3.75.59.26 1.05.41 1.41.52.59.19 1.13.16 1.56.1.48-.07 1.47-.6 1.68-1.18.21-.58.21-1.08.15-1.18-.06-.1-.22-.16-.47-.28Z"/>
                                        </svg>
                                    </a>
                                    <a href="https://www.instagram.com/khalidmisyal_/" target="_blank" rel="noopener noreferrer" aria-label="Instagram Muhammad Khalid Misy'al">
                                        <svg viewBox="0 0 24 24" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4c0 3.2-2.6 5.8-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8C2 4.6 4.6 2 7.8 2Zm8.4 18.1c2.15 0 3.9-1.75 3.9-3.9V7.8c0-2.15-1.75-3.9-3.9-3.9H7.8c-2.15 0-3.9 1.75-3.9 3.9v8.4c0 2.15 1.75 3.9 3.9 3.9h8.4ZM12 7.15A4.85 4.85 0 1 1 7.15 12 4.85 4.85 0 0 1 12 7.15Zm0 7.8A2.95 2.95 0 1 0 9.05 12 2.95 2.95 0 0 0 12 14.95ZM17.55 6.6a1.13 1.13 0 1 1-1.13 1.13 1.13 1.13 0 0 1 1.13-1.13Z"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="about-team-card" data-about-reveal data-about-reveal-delay="140">

                        <div class="about-team-profile-pic">
                            <img
                                src="{{ asset('images/aghis.webp') }}"
                                alt="Foto profil anggota tim KOPSOON"
                                loading="lazy"
                            >
                        </div>

                        <div class="about-team-bottom">
                            <div class="about-team-content">
                                <span class="about-team-name">Muhamad Aghis Najib</span>
                            </div>

                            <div class="about-team-bottom-bottom">
                                <div class="about-team-social-links">
                                    <a href="https://wa.me/6282135759157" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp Muhamad Aghis Najib">
                                        <svg viewBox="0 0 24 24" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.04 2C6.58 2 2.14 6.44 2.14 11.9c0 1.74.46 3.45 1.33 4.95L2 22l5.29-1.39a9.86 9.86 0 0 0 4.75 1.21h.01c5.46 0 9.9-4.44 9.9-9.9C21.95 6.44 17.51 2 12.04 2Zm0 18.15h-.01a8.22 8.22 0 0 1-4.19-1.15l-.3-.18-3.14.82.84-3.06-.2-.31a8.23 8.23 0 0 1-1.26-4.37c0-4.55 3.7-8.25 8.26-8.25 2.2 0 4.27.86 5.83 2.42a8.2 8.2 0 0 1 2.42 5.84c0 4.54-3.7 8.24-8.25 8.24Zm4.52-6.17c-.25-.12-1.47-.72-1.7-.8-.23-.09-.39-.13-.56.12-.17.25-.64.8-.79.97-.15.17-.29.19-.54.06-.25-.12-1.05-.39-2-1.24-.74-.66-1.24-1.47-1.38-1.72-.14-.25-.02-.38.11-.51.11-.11.25-.29.37-.44.12-.15.17-.25.25-.42.08-.17.04-.31-.02-.44-.06-.12-.56-1.34-.76-1.84-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.44.06-.66.31-.23.25-.87.85-.87 2.07 0 1.22.89 2.4 1.01 2.56.12.17 1.75 2.67 4.24 3.75.59.26 1.05.41 1.41.52.59.19 1.13.16 1.56.1.48-.07 1.47-.6 1.68-1.18.21-.58.21-1.08.15-1.18-.06-.1-.22-.16-.47-.28Z"/>
                                        </svg>
                                    </a>
                                    <a href="https://www.instagram.com/1aghis_beneran/" target="_blank" rel="noopener noreferrer" aria-label="Instagram Muhamad Aghis Najib">
                                        <svg viewBox="0 0 24 24" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4c0 3.2-2.6 5.8-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8C2 4.6 4.6 2 7.8 2Zm8.4 18.1c2.15 0 3.9-1.75 3.9-3.9V7.8c0-2.15-1.75-3.9-3.9-3.9H7.8c-2.15 0-3.9 1.75-3.9 3.9v8.4c0 2.15 1.75 3.9 3.9 3.9h8.4ZM12 7.15A4.85 4.85 0 1 1 7.15 12 4.85 4.85 0 0 1 12 7.15Zm0 7.8A2.95 2.95 0 1 0 9.05 12 2.95 2.95 0 0 0 12 14.95ZM17.55 6.6a1.13 1.13 0 1 1-1.13 1.13 1.13 1.13 0 0 1 1.13-1.13Z"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="about-team-card" data-about-reveal data-about-reveal-delay="200">

                        <div class="about-team-profile-pic">
                            <img
                                src="{{ asset('images/nico.webp') }}"
                                alt="Foto profil anggota tim KOPSOON"
                                loading="lazy"
                            >
                        </div>

                        <div class="about-team-bottom">
                            <div class="about-team-content">
                                <span class="about-team-name">Nico Anselmus Martua Sihombing</span>
                            </div>

                            <div class="about-team-bottom-bottom">
                                <div class="about-team-social-links">
                                    <a href="https://wa.me/6285262224002" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp Nico Anselmus Martua Sihombing">
                                        <svg viewBox="0 0 24 24" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.04 2C6.58 2 2.14 6.44 2.14 11.9c0 1.74.46 3.45 1.33 4.95L2 22l5.29-1.39a9.86 9.86 0 0 0 4.75 1.21h.01c5.46 0 9.9-4.44 9.9-9.9C21.95 6.44 17.51 2 12.04 2Zm0 18.15h-.01a8.22 8.22 0 0 1-4.19-1.15l-.3-.18-3.14.82.84-3.06-.2-.31a8.23 8.23 0 0 1-1.26-4.37c0-4.55 3.7-8.25 8.26-8.25 2.2 0 4.27.86 5.83 2.42a8.2 8.2 0 0 1 2.42 5.84c0 4.54-3.7 8.24-8.25 8.24Zm4.52-6.17c-.25-.12-1.47-.72-1.7-.8-.23-.09-.39-.13-.56.12-.17.25-.64.8-.79.97-.15.17-.29.19-.54.06-.25-.12-1.05-.39-2-1.24-.74-.66-1.24-1.47-1.38-1.72-.14-.25-.02-.38.11-.51.11-.11.25-.29.37-.44.12-.15.17-.25.25-.42.08-.17.04-.31-.02-.44-.06-.12-.56-1.34-.76-1.84-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.44.06-.66.31-.23.25-.87.85-.87 2.07 0 1.22.89 2.4 1.01 2.56.12.17 1.75 2.67 4.24 3.75.59.26 1.05.41 1.41.52.59.19 1.13.16 1.56.1.48-.07 1.47-.6 1.68-1.18.21-.58.21-1.08.15-1.18-.06-.1-.22-.16-.47-.28Z"/>
                                        </svg>
                                    </a>
                                    <a href="https://www.instagram.com/nicoansell/" target="_blank" rel="noopener noreferrer" aria-label="Instagram Nico Anselmus Martua Sihombing">
                                        <svg viewBox="0 0 24 24" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4c0 3.2-2.6 5.8-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8C2 4.6 4.6 2 7.8 2Zm8.4 18.1c2.15 0 3.9-1.75 3.9-3.9V7.8c0-2.15-1.75-3.9-3.9-3.9H7.8c-2.15 0-3.9 1.75-3.9 3.9v8.4c0 2.15 1.75 3.9 3.9 3.9h8.4ZM12 7.15A4.85 4.85 0 1 1 7.15 12 4.85 4.85 0 0 1 12 7.15Zm0 7.8A2.95 2.95 0 1 0 9.05 12 2.95 2.95 0 0 0 12 14.95ZM17.55 6.6a1.13 1.13 0 1 1-1.13 1.13 1.13 1.13 0 0 1 1.13-1.13Z"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="about-team-card" data-about-reveal data-about-reveal-delay="260">

                        <div class="about-team-profile-pic">
                            <img
                                src="{{ asset('images/kiki.webp') }}"
                                alt="Foto profil anggota tim KOPSOON"
                                loading="lazy"
                            >
                        </div>

                        <div class="about-team-bottom">
                            <div class="about-team-content">
                                <span class="about-team-name">ANGGITA RIFQI FAUZAN</span>
                            </div>

                            <div class="about-team-bottom-bottom">
                                <div class="about-team-social-links">
                                    <a href="https://wa.me/6285329482121" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp ANGGITA RIFQI FAUZAN">
                                        <svg viewBox="0 0 24 24" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.04 2C6.58 2 2.14 6.44 2.14 11.9c0 1.74.46 3.45 1.33 4.95L2 22l5.29-1.39a9.86 9.86 0 0 0 4.75 1.21h.01c5.46 0 9.9-4.44 9.9-9.9C21.95 6.44 17.51 2 12.04 2Zm0 18.15h-.01a8.22 8.22 0 0 1-4.19-1.15l-.3-.18-3.14.82.84-3.06-.2-.31a8.23 8.23 0 0 1-1.26-4.37c0-4.55 3.7-8.25 8.26-8.25 2.2 0 4.27.86 5.83 2.42a8.2 8.2 0 0 1 2.42 5.84c0 4.54-3.7 8.24-8.25 8.24Zm4.52-6.17c-.25-.12-1.47-.72-1.7-.8-.23-.09-.39-.13-.56.12-.17.25-.64.8-.79.97-.15.17-.29.19-.54.06-.25-.12-1.05-.39-2-1.24-.74-.66-1.24-1.47-1.38-1.72-.14-.25-.02-.38.11-.51.11-.11.25-.29.37-.44.12-.15.17-.25.25-.42.08-.17.04-.31-.02-.44-.06-.12-.56-1.34-.76-1.84-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.44.06-.66.31-.23.25-.87.85-.87 2.07 0 1.22.89 2.4 1.01 2.56.12.17 1.75 2.67 4.24 3.75.59.26 1.05.41 1.41.52.59.19 1.13.16 1.56.1.48-.07 1.47-.6 1.68-1.18.21-.58.21-1.08.15-1.18-.06-.1-.22-.16-.47-.28Z"/>
                                        </svg>
                                    </a>
                                    <a href="https://www.instagram.com/rifqifznnn/" target="_blank" rel="noopener noreferrer" aria-label="Instagram ANGGITA RIFQI FAUZAN">
                                        <svg viewBox="0 0 24 24" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4c0 3.2-2.6 5.8-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8C2 4.6 4.6 2 7.8 2Zm8.4 18.1c2.15 0 3.9-1.75 3.9-3.9V7.8c0-2.15-1.75-3.9-3.9-3.9H7.8c-2.15 0-3.9 1.75-3.9 3.9v8.4c0 2.15 1.75 3.9 3.9 3.9h8.4ZM12 7.15A4.85 4.85 0 1 1 7.15 12 4.85 4.85 0 0 1 12 7.15Zm0 7.8A2.95 2.95 0 1 0 9.05 12 2.95 2.95 0 0 0 12 14.95ZM17.55 6.6a1.13 1.13 0 1 1-1.13 1.13 1.13 1.13 0 0 1 1.13-1.13Z"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="about-team-card" data-about-reveal data-about-reveal-delay="320">

                        <div class="about-team-profile-pic">
                            <img
                                src="{{ asset('images/akmal.webp') }}"
                                alt="Foto profil anggota tim KOPSOON"
                                loading="lazy"
                            >
                        </div>

                        <div class="about-team-bottom">
                            <div class="about-team-content">
                                <span class="about-team-name">Muhammad Zaidan Akmal</span>
                            </div>

                            <div class="about-team-bottom-bottom">
                                <div class="about-team-social-links">
                                    <a href="https://wa.me/6288221537459" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp Muhammad Zaidan Akmal">
                                        <svg viewBox="0 0 24 24" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.04 2C6.58 2 2.14 6.44 2.14 11.9c0 1.74.46 3.45 1.33 4.95L2 22l5.29-1.39a9.86 9.86 0 0 0 4.75 1.21h.01c5.46 0 9.9-4.44 9.9-9.9C21.95 6.44 17.51 2 12.04 2Zm0 18.15h-.01a8.22 8.22 0 0 1-4.19-1.15l-.3-.18-3.14.82.84-3.06-.2-.31a8.23 8.23 0 0 1-1.26-4.37c0-4.55 3.7-8.25 8.26-8.25 2.2 0 4.27.86 5.83 2.42a8.2 8.2 0 0 1 2.42 5.84c0 4.54-3.7 8.24-8.25 8.24Zm4.52-6.17c-.25-.12-1.47-.72-1.7-.8-.23-.09-.39-.13-.56.12-.17.25-.64.8-.79.97-.15.17-.29.19-.54.06-.25-.12-1.05-.39-2-1.24-.74-.66-1.24-1.47-1.38-1.72-.14-.25-.02-.38.11-.51.11-.11.25-.29.37-.44.12-.15.17-.25.25-.42.08-.17.04-.31-.02-.44-.06-.12-.56-1.34-.76-1.84-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.44.06-.66.31-.23.25-.87.85-.87 2.07 0 1.22.89 2.4 1.01 2.56.12.17 1.75 2.67 4.24 3.75.59.26 1.05.41 1.41.52.59.19 1.13.16 1.56.1.48-.07 1.47-.6 1.68-1.18.21-.58.21-1.08.15-1.18-.06-.1-.22-.16-.47-.28Z"/>
                                        </svg>
                                    </a>
                                    <a href="https://www.instagram.com/zaydhana_/" target="_blank" rel="noopener noreferrer" aria-label="Instagram Muhammad Zaidan Akmal">
                                        <svg viewBox="0 0 24 24" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4c0 3.2-2.6 5.8-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8C2 4.6 4.6 2 7.8 2Zm8.4 18.1c2.15 0 3.9-1.75 3.9-3.9V7.8c0-2.15-1.75-3.9-3.9-3.9H7.8c-2.15 0-3.9 1.75-3.9 3.9v8.4c0 2.15 1.75 3.9 3.9 3.9h8.4ZM12 7.15A4.85 4.85 0 1 1 7.15 12 4.85 4.85 0 0 1 12 7.15Zm0 7.8A2.95 2.95 0 1 0 9.05 12 2.95 2.95 0 0 0 12 14.95ZM17.55 6.6a1.13 1.13 0 1 1-1.13 1.13 1.13 1.13 0 0 1 1.13-1.13Z"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>
    </main>

    @include('components.footer')

    <script src="{{ asset('js/page-transition.js') }}"></script>
    <script src="{{ asset('js/about-parallax.js') }}"></script>
</body>
</html>
