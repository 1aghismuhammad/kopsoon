<nav class="site-navbar">
    <div class="navbar-container container">
        
        <a href="/" class="navbar-logo">
            <img src="{{ asset('images/logo.png') }}" alt="KOPSOON Logo" class="logo-img">
        </a>

        <button class="navbar-toggle" id="mobile-menu-btn" aria-label="Buka Menu">
            <span class="hamburger-line"></span>
            <span class="hamburger-line"></span>
            <span class="hamburger-line"></span>
        </button>

        <ul class="navbar-menu" id="navbar-menu">
            <li><a href="/" class="nav-link active">Beranda</a></li>
            <li><a href="/about" class="nav-link">Cerita Kami</a></li>
            <li><a href="/product" class="nav-link">Produk</a></li>
            <li><a href="/serving" class="nav-link">Penyajian</a></li>
            <li><a href="/reseller" class="nav-link">Reseller</a></li>
        </ul>

    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('navbar-menu');

        if(btn && menu) {
            btn.addEventListener('click', function() {
                menu.classList.toggle('active');
                btn.classList.toggle('active');
            });
        }
    });
</script>