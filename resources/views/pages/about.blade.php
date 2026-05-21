<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About KOPSOON - Cerita Kopi Santan Nusantara</title>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about-hero.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about-story.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about-values.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about-team.css') }}">
    <link rel="stylesheet" href="{{ asset('css/page-transition.css') }}">
</head>
<body class="about-page">
    @include('components.page-transition')

    @include('components.navbar')

    <main>
        <section class="about-hero-section">
            <div class="about-hero-curve"></div>
            <div class="about-bean about-bean-left"></div>
            <div class="about-hero-container container">
                <div class="about-hero-content">
                    <h1 class="about-hero-title">
                        <span>C</span>erita di Balik Secangkir KOPSOON
                    </h1>
                    <p>
                        Menghidupkan kembali warisan rasa Nusantara dalam balutan kepraktisan masa kini.
                    </p>
                </div>
            </div>
        </section>

        <section class="about-story-section about-story-light">
            <div class="about-cup-outline"></div>
            <div class="about-story-container container about-story-grid">
                <div class="about-story-visual" aria-hidden="true"></div>
                <div class="about-story-content">
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

        <section class="about-story-section about-story-dark">
            <div class="about-dark-decoration about-dark-decoration-left"></div>
            <div class="about-dark-decoration about-dark-decoration-right"></div>
            <div class="about-story-container container about-story-grid about-story-grid-reverse">
                <div class="about-story-content about-story-content-dark">
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
                </div>
                <div class="about-product-photo">
                    <img src="{{ asset('images/product-pack.png') }}" alt="Produk KOPSOON Kopi Santan Instan">
                </div>
            </div>
        </section>

        <section class="about-values-section">
            <div class="about-values-curve"></div>
            <div class="about-values-container container">
                <div class="about-values-heading">
                    <h2>OUR CORE VALUES</h2>
                </div>

                <div class="about-values-list">
                    <article class="about-value-item">
                        <h3>Cita Rasa Autentik Nusantara</h3>
                        <p>
                            Kami berkomitmen menjaga keaslian rasa kopi santan tradisional, namun dengan standar kualitas
                            produksi modern yang higienis.
                        </p>
                    </article>

                    <article class="about-value-item">
                        <h3>Praktis & Dinamis</h3>
                        <p>
                            KOPSOON dirancang untuk gaya hidup aktif: mudah diseduh, mudah dibawa, dan tetap nikmat dinikmati
                            panas maupun dingin.
                        </p>
                    </article>

                    <article class="about-value-item">
                        <h3>Kebanggaan Lokal</h3>
                        <p>
                            Misi kami adalah memperkenalkan kembali kebanggaan kuliner lokal kepada generasi muda, membuktikan
                            bahwa minuman tradisional bisa bersaing di pasar modern.
                        </p>
                    </article>
                </div>
            </div>
        </section>

        <section class="about-team-section">
            <div class="about-team-decoration about-team-decoration-left"></div>
            <div class="about-team-decoration about-team-decoration-right"></div>
            <div class="about-team-container container">
                <h2>MEET OUR TEAM</h2>

                <div class="about-team-grid">
                    <article class="about-team-card">
                        <div class="about-team-photo"></div>
                        <div class="about-team-info">
                            <h3>Aghis Najib</h3>
                            <p>Ini apasi</p>
                            <div class="about-team-socials">
                                <a href="#" aria-label="WhatsApp Aghis Najib">WA</a>
                                <a href="#" aria-label="Instagram Aghis Najib">IG</a>
                            </div>
                        </div>
                    </article>

                    <article class="about-team-card">
                        <div class="about-team-photo"></div>
                        <div class="about-team-info">
                            <h3>Aghis Najib</h3>
                            <p>Ini apasi</p>
                            <div class="about-team-socials">
                                <a href="#" aria-label="WhatsApp Aghis Najib">WA</a>
                                <a href="#" aria-label="Instagram Aghis Najib">IG</a>
                            </div>
                        </div>
                    </article>

                    <article class="about-team-card">
                        <div class="about-team-photo"></div>
                        <div class="about-team-info">
                            <h3>Aghis Najib</h3>
                            <p>Ini apasi</p>
                            <div class="about-team-socials">
                                <a href="#" aria-label="WhatsApp Aghis Najib">WA</a>
                                <a href="#" aria-label="Instagram Aghis Najib">IG</a>
                            </div>
                        </div>
                    </article>

                    <article class="about-team-card">
                        <div class="about-team-photo"></div>
                        <div class="about-team-info">
                            <h3>Aghis Najib</h3>
                            <p>Ini apasi</p>
                            <div class="about-team-socials">
                                <a href="#" aria-label="WhatsApp Aghis Najib">WA</a>
                                <a href="#" aria-label="Instagram Aghis Najib">IG</a>
                            </div>
                        </div>
                    </article>

                    <article class="about-team-card">
                        <div class="about-team-photo"></div>
                        <div class="about-team-info">
                            <h3>Aghis Najib</h3>
                            <p>Ini apasi</p>
                            <div class="about-team-socials">
                                <a href="#" aria-label="WhatsApp Aghis Najib">WA</a>
                                <a href="#" aria-label="Instagram Aghis Najib">IG</a>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>
    </main>

    @include('components.footer')

    <script src="{{ asset('js/page-transition.js') }}"></script>
</body>
</html>
