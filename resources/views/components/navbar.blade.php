<nav class="site-navbar">
    <div class="navbar-container container">
        <a href="{{ route('home') }}" class="navbar-logo">
            <img src="{{ asset('images/logo.webp') }}" alt="KOPSOON Logo" class="logo-img">
        </a>

        <button class="navbar-toggle" id="mobile-menu-btn" aria-label="Buka Menu">
            <span class="hamburger-line"></span>
            <span class="hamburger-line"></span>
            <span class="hamburger-line"></span>
        </button>

        <ul class="navbar-menu" id="navbar-menu">
            <li>
                <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
                    Home
                </a>
            </li>
            <li>
                <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">
                    About
                </a>
            </li>
            <li>
                <a href="{{ route('product') }}" class="nav-link {{ request()->routeIs('product') ? 'active' : '' }}">
                    Product
                </a>
            </li>
            <li>
                <a href="{{ route('serving') }}" class="nav-link {{ request()->routeIs('serving') ? 'active' : '' }}">
                    Serving Method
                </a>
            </li>
            <li>
                <a href="{{ route('reseller') }}" class="nav-link {{ request()->routeIs('reseller') ? 'active' : '' }}">
                    Reseller
                </a>
            </li>
            <li>
                <a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">
                    Contact
                </a>
            </li>
        </ul>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('navbar-menu');

        if (btn && menu) {
            btn.addEventListener('click', function() {
                menu.classList.toggle('active');
                btn.classList.toggle('active');
            });
        }
    });
</script>
