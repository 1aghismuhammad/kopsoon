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
            <li><a href="/" class="nav-link active">Home</a></li>
            <li><a href="/about" class="nav-link">About</a></li>
            <li><a href="/product" class="nav-link">Product</a></li>
            <li><a href="/serving" class="nav-link">Serving Method</a></li>
            <li><a href="/reseller" class="nav-link">Reseller</a></li>
            <li><a href="/contact" class="nav-link">Contact</a></li>
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